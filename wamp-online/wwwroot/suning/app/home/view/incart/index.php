<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/cart.css"/>
<script type="text/javascript" src="{{__ROOT__}}/public/js/cart.js"></script>
<script type="text/javascript" src="{{__ROOT__}}/public/js/area.js"></script>
<block name="content">
<!--顶部开始-->
<header>
	<parent name="header" >
</header>
<div id="">

<!--顶部logo-->	
	<div id="cart_header">
		<a href="{{u('entry.index')}}"><img src="./public/image/logo.png"/></a>
		<img id="cart_tp" src="./public/image/cart.png"/>
	</div>
	<!--地址-->
	<div id="address">
		<span id="">
			送货至
		</span>
		<select name="" id="area1"></select>
		<select name="" id="area2"></select>
		<select name="" id="area3"></select>
	</div>
<!--顶部条-->
<div id="">
	<div id="cart_bar">
		<p><input type="checkbox" name="" id="" value="" /> <span >全选</span></p>
		<p>商品信息</p>
		<p>规格</p>
		<p>单价（元）</p>
		<p>数量</p>
		<p>小计（元）</p>
		<p>操作</p>
	</div>

</div>
</div>
<!--顶部条结束-->
<!--商品开始-->
<if value="$_SESSION['cart']['goods'] == []">
  	<div class="car-hidden">
            <h2>
                                抱歉。。。您的购物车是空的！！！！
            <br>
                                快去购物吧！！
           </h2>
           </div>  
<else> 
<foreach from="$_SESSION['cart']['goods']" key="$k" value="$v">
<div class="store" attr="{{$k}}">

<div id="">
	<div id="by">
		<input type="checkbox" name="" id="" value="" />
		<img src="./public/image/lion.png"/>
		<h3>苏宁自营</h3>
	</div>
</div>
<div  >
	<div class="cart_goods">
		<p><input type="checkbox" name="" id="" value="" /></p>
		<div class="">
			<img src="{{$v['pic']}}"/>
			<div class="words">
				<a href="">{{$v['name']}}</a>
				<br>
				<img src="./favicon.ico"/>
			</div>
		</div>
		<div class="cart_details">
			<span>{{$v['options']}}</span>
		</div>
		<div class="cart_details">
			<span>¥ {{$v['price']}}</span>
		</div>
		<div class="cart_details">
			<span>	
				<a class="min" src="javascript:;">-</a>
				<input style="display: block;float: left;width: 30px;height: 16px;margin: 0;padding: 0;text-align: center;" class="text_box" name="" type="text" value="{{$v['num']}}" max="10"/>
				<a class="add" src="javascript:;">+</a>
			</span>
		</div>
		<div class="cart_details">
			<span class="total">¥ {{$v['total']}}</span>
		</div>
		<div class="cart_details">
			<a href=""><span>移入收藏</span></a>
			<a href="javascript:;" class="del" kk="{{$k}}"><span>删除</span></a>
		</div>
	</div>
</div>

</div>
</foreach>

<!--提交-->
<div class="">
		<!--结算-->
		<div id="pay">
			<div class="pay-left">
				<div class="pay-check">
					<!--<input type="checkbox" name="" id="" value="" />-->
					<input type="checkbox" name="" id="id2" value="" class="checkb" />
					<span>全选</span>
				</div>
			</div>
			<div class="pay-right">
				<div class="pay-rr">
					<div class="pay-price">
						<span>总价（含运费）：</span>
						<b>￥<span class="total sum" ><?php echo Cart::getTotalPrice(); ?></span>.00</b>
					</div>
					<div class="pay-jiesuan">
						<span>为您节省：<b>￥0.00</b></span>
						<span style="margin-right: 0px;">运费（以结算页为准）：<b>￥0.00</b></span>
					</div>
				</div>
				<div class="pay-over">
					<a href="javascript:;"<if value='Cart::getTotalPrice() == 0'>style="background:#cccccc;"</if>>去结算</a>
					
				</div>
			</div>
		</div>
		<!--结算结束-->
	
</div>
</if>
<!--底部开始-->
<footer>
	<parent name="footer">
</footer>
<!--底部结束	-->
</block>
<script>
$(function(){
	//初始化方法
	area.init('area');
	//执行修改时候默认选中效果
	area.selected("黑龙江","佳木斯","抚远县")
})
$(function(){
//增加
$('.add').click(function(){
	var kk = $(this).parents('.store').attr('attr');
	var _this = $(this);
	$.ajax({
		type:'post',
		url:"{{u('addNum')}}",
		data:{kk:kk},
		dataType:'json',
		success:function(phpData){
			_this.parents('.cart_details').find('.text_box').val(phpData.num);
			_this.parents('.cart_details').siblings().find('.total').text(phpData.price);
			$('#pay').find('.total').text(phpData.total);
		}
	});
})
//减少
$('.min').click(function(){
	var kk = $(this).parents('.store').attr('attr');
	var _this = $(this);
		$.ajax({
		type:'post',
		url:"{{u('minNum')}}",
		data:{kk:kk},
		dataType:'json',
		success:function(phpData){
			_this.parents('.cart_details').find('.text_box').val(phpData.num);
			_this.parents('.cart_details').siblings().find('.total').text(phpData.price);
			$('#pay').find('.total').text(phpData.total);
		}
	});
})
//删除
$('.del').click(function(){
	var kk = $(this).attr('kk');
	if(confirm('确定删除吗??!!')){
		$(this).parents('.store').remove();
			$.ajax({
			type:'post',
			url:"{{u('del')}}",
			data:{kk:kk},
			dataType:'json',
			success:function(phpData){
				$('#pay').find('.total').text(phpData.newTotal);
				if(phpData.newTotal==0){			
					$('.pay-over a').css({background: '#cccccc'})
				
				}							
			}
		})
	}
	
})


$('.pay-over a').click(function(){
	if($('.sum').text()>0){	
		location.href = "{{u('order.index')}}";		
	}
	else{
	alert('您的购物车没有货品了，快去添加宝贝吧')
	location.href = "{{u('entry.index')}}";		
	}
		
})
})
</script>