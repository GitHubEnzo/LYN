<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/orderlist.css"/>
<!--<script type="text/javascript" src="./public/js/orderlist.js">-->
	
</script>
<block name="content">
<!--顶部开始-->
<header>
	<parent name="header" >
</header>
<!--我的易购-->
<div class="">
	<div class="yigou">
		<h1>我的易购</h1>
	</div>
</div>
<!--分类-->
<div class="list">
	<ul>
		<h3><li>全部订单</li></h3>
		<h3><li>代付款</li></h3>
		<h3><li>代收货</li></h3>
		<h3><li>待评价</li></h3>
	</ul>
	<div class="">
		
		<p></p>
	</div>
</div>
<!--顶部条-->
<div id="">
	<div id="cart_bar">
		<p>
		<select name="">
			<option value="">近一个月订单</option>
			<option value="">近三个月订单</option>
			<option value="">近半年订单</option>
		</select>
		</p>
		<p>商品信息</p>
		<p>单价（元）</p>
		<p>数量</p>
		<p>下单时间</p>
		<p>支付总金额（元）</p>
		<p>订单状态</p>
		<p>操作</p>
	</div>

</div>
</div>
<!--顶部条结束-->
<!--商品开始-->
<div class="oldergoods">
	<foreach from="$data" key="$k" value="$v">
	<div id="by">
		<img src="./favicon.ico"/>
		<h3 class="num" value='{{$v['number']}}'>订单号:{{$v['number']}}</h3>
	</div>
</div>
<div class="oldergoods">
<foreach from="$v['goods']" key="$kk" value="$vv">
	
	<div class="cart_goods" >
		<p><input type="checkbox" name="" id="" value="" /></p>
		<div class="">
			<img src="{{$vv['pic']}}"/>
			<div class="words">
				<a href="{{u('goods.index',['gid'=>$vv['gid'],'tid'=>$vv['tid']])}}">{{$vv['gname']}}</a>
				<br>
				<img src="./favicon.ico"/>
			</div>
		</div>
		<div class="cart_details">
			<span>¥ {{$vv['shopprice']}}</span>
		</div>
		<div class="cart_details">
			<span>{{$vv['quantity']}} {{$vv['unit']}}</span>
		</div>
		<div class="cart_details">
						<a href=""><span>{{date('Y-m-s,H:m:s',$v['time'])}}</span></a>
		</div>
		<div class="cart_details">
						<span>¥ {{$vv['subtotal']}}</span>
		</div>
		<div class="cart_details">
						<span style="color: red;" class="state">{{$v['status']}}</span>
		</div>
	</div>
</foreach>
		<div class="cart_details pay">

						<if value='$v["status"] == "未付款"'>
						<a href="javascript:;"><span value="{{$v['number']}}" >收藏</span></a>							
						<a href="javascript:;" ><span class="pays" value="{{$v['number']}}">马上支付</span></a>						    												     
						<elseif value='$v["status"] == "退货中"'/>
						<a href="javascript:;"><span value="{{$v['number']}}" >正在退货</span></a>						
						<else/>
						<a href="javascript:;"><span value="{{$v['number']}}" class='sales'>退货</span></a>						
						<a href="javascript:;" ><span value="{{$v['number']}}">交易正在处理</span></a>
						</if>

		</div>
</foreach>
</div>
<!--底部开始-->
<footer>
	<parent name="footer">
</footer>
<!--底部结束	-->
</block>
<script type="text/javascript">
	$(function(){
		$('.pays').click(function(){
			if($(this).text()=='马上支付'){
				var num=$(this).attr('value');
			var  jq_this=$(this);
			data={num:num}
			$.post("{{u('pay')}}",data,function(res){
				jq_this.parents('.cart_details').siblings().find('.state').html('待发货');
				jq_this.parent('a').siblings().find('span').html('退货');				
				jq_this.parent('a').siblings().find('span').addClass("sales");
				jq_this.html('交易正在处理');				
				alert('订单'+num+'付款成功')
		},"json");
		return false;
			}						
		})
//		退货
		$('.cart_details').on('click','.sales',function(){
			if($(this).text()=='退货'){
				var num=$(this).attr('value');
			var  jq_this=$(this);
			data={num:num}
			$.post("{{u('sales')}}",data,function(res){
				jq_this.parents('.cart_details').siblings().find('.state').html('退货中');
				jq_this.html('正在退货');				
				alert('订单'+num+'已退货，等待卖家处理')
		},"json");
		return false;
			}						
		})
	})
</script>