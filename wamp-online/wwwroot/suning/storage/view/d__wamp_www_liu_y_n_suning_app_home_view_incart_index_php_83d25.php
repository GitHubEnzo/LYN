<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>购物车</title>
    <link rel="icon" href="favicon.ico" />
    <link href="http://localhost/Liu.Y.N/suning/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://localhost/Liu.Y.N/suning/resource/hdjs/js/jquery.min.js"></script>
    <script type="text/javascript" src='http://localhost/Liu.Y.N/suning/public/js/home.js'></script>
    <script type="text/javascript" src="http://localhost/Liu.Y.N/suning/libs/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/Liu.Y.N/suning/public/css/home.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/Liu.Y.N/suning/public/icon/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/Liu.Y.N/suning/libs/functions.css"/>
</head>
<body>
<!--顶部广告-->


<!--顶部广告结束-->
<!--顶部条-->

<!--顶部条结束-->
<!--右边条-->

<!--右边条结束-->
<!--搜索-->

			
<!--主体部分-->
<div>
    
<!--顶部开始-->
<header>
	
	<header>
    <div id="top_bar">
        <!--顶部条左-->
        <div id="top_bar_left">
            <p>
                <a href="">网站导航</a><i class="icon iconfont" style="color: #BBBBBB;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="">商家入住</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
        </div>
        <!--顶部条左结束-->
        <!--顶部条右-->
        <div id="top_bar_right">
            <p>
                <a href="<?php echo u('orderlist.index')?>">我的订单</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="">我的易购</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <em class="icon iconfont " id="bus">&#xe698;</em><a href="<?php echo u('incart.index')?>">购物车</a>
            </p>
            <p id="phone">
                <em class="icon iconfont">&#xe72a;</em><a href="">手机苏宁</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="<?php echo u('pay.index')?>">易付宝</a>
            </p>
            <p>
                <a href="">企业采购</a>
            </p>
            <p>           	
                <a href="">客户服务<img src="public/image/askBar.gif"/></a>
            </p>
        </div>
        <!--顶部条右结束-->
        <!--登陆、注册-->
        <div id="login_reg">
            <?php if($_SESSION['home']['uid']){?>
                
                <a href="<?php echo u('orderlist.index')?>" id="login">欢迎您！<span style="color: orange;"><?php echo $_SESSION['home']['account']?><span></a>
                <a href="<?php echo u('entry.out')?>" id="reg">退出</a>
                <?php }else{?>
                <a href="<?php echo u('login.index')?>" id="login">登陆</a>
                <a href="<?php echo u('reg.index')?>" id="reg">注册</a>
            
               <?php }?>

        </div>
        <!--登陆、注册结束-->
    </div>
    </header>

</header>
<div id="">

<!--顶部logo-->	
	<div id="cart_header">
		<a href="<?php echo u('entry.index')?>"><img src="./public/image/logo.png"/></a>
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
<?php if($_SESSION['cart']['goods'] == []){?>
                
  	<div class="car-hidden">
            <h2>
                                抱歉。。。您的购物车是空的！！！！
            <br>
                                快去购物吧！！
           </h2>
           </div>  
<?php }else{?> 
<?php if(!empty($_SESSION['cart']['goods'])){ foreach ($_SESSION['cart']['goods'] as $k=>$v){?>
<div class="store" attr="<?php echo $k?>">

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
			<img src="<?php echo $v['pic']?>"/>
			<div class="words">
				<a href=""><?php echo $v['name']?></a>
				<br>
				<img src="./favicon.ico"/>
			</div>
		</div>
		<div class="cart_details">
			<span><?php echo $v['options']?></span>
		</div>
		<div class="cart_details">
			<span>¥ <?php echo $v['price']?></span>
		</div>
		<div class="cart_details">
			<span>	
				<a class="min" src="javascript:;">-</a>
				<input style="display: block;float: left;width: 30px;height: 16px;margin: 0;padding: 0;text-align: center;" class="text_box" name="" type="text" value="<?php echo $v['num']?>" max="10"/>
				<a class="add" src="javascript:;">+</a>
			</span>
		</div>
		<div class="cart_details">
			<span class="total">¥ <?php echo $v['total']?></span>
		</div>
		<div class="cart_details">
			<a href=""><span>移入收藏</span></a>
			<a href="javascript:;" class="del" kk="<?php echo $k?>"><span>删除</span></a>
		</div>
	</div>
</div>

</div>
<?php }}?>

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
					<a href="javascript:;"<?php if(Cart::getTotalPrice() == 0){?>
                style="background:#cccccc;"
               <?php }?>>去结算</a>
					
				</div>
			</div>
		</div>
		<!--结算结束-->
	
</div>

               <?php }?>
<!--底部开始-->
<footer>
	
	<footer>
        <!--友情链接开始-->
        <div id="link">
            <a href="">苏宁控股</a><span >|</span>
            <a href="">苏宁云商</a><span >|</span>
            <a href="">苏宁互联</a><span >|</span>
            <a href="">苏宁金融</a><span >|</span>
            <a href="">PPTV</a><span >|</span>
            <a href="">红孩子</a><span >|</span>
            <a href="">乐购仕</a><span >|</span>
            <a href="">苏宁物流</a><span >|</span>
            <a href="">手机苏宁</a><span >|</span>
            <a href="">苏宁酒店</a><span >|</span>
            <a href="">知识产权举报</a>
            <br>
            <a href="">关于苏宁易购</a><span >|</span>
            <a href="">联系我们</a><span >|</span>
            <a href="">诚聘英才</a><span >|</span>
            <a href="">供应商入驻</a><span >|</span>
            <a href="">广告平台</a><span >|</span>
            <a href="">苏宁联盟</a><span >|</span>
            <a href="">苏宁招标</a><span >|</span>
            <a href="">友情链接</a><span >|</span>
            <a href="">法律申明</a><span >|</span>
            <a href="">用户体验提升计划</a><span >|</span>
            <a href="">股东会员认证</a>
        </div>
        <!--友情链接结束-->
        <!--网站配置开始-->
        <div id="webset">
            <span>Copyright© 2002-2016 ，苏宁云商集团股份有限公司版权所有 苏ICP备10207551号-4</span>
            <span >|</span>
            <span>苏B1-20130131</span>
            <span >|</span>
            <span >苏B2-20130376</span>
            <br>
            <span>苏B2-20130391 出版物经营许可证新出发苏批字第A-243号</span>
            <span >|</span>
            <span>互联网药品信息服务资格证书（苏）-非经营性-2016-0005</span>
            <br>
            <span >本网站直接或间接向消费者推销商品或者服务的商业宣传均属于“广告”（包装及参数、售后保障等商品信息除外）</span>
        </div>
        <!--网站配置结束-->
        <!--授权开始-->
        <div id="authorization">
            <img src="./public/image/chengxin.png"/>
            <img src="./public/image/unicom.png"/>
            <img src="./public/image/dianxin.png"/>
            <img src="./public/image/dianzi.png"/>
        </div>
    </footer>
        <!--授权结束-->

</footer>
<!--底部结束	-->

</div>
<!--主体部分结束-->
<!--服务-->

<!--底部开始-->

<!--底部结束-->
</body>
</html></extend>
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/cart.css"/>
<script type="text/javascript" src="<?php echo __ROOT__?>/public/js/cart.js"></script>
<script type="text/javascript" src="<?php echo __ROOT__?>/public/js/area.js"></script>

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
		url:"<?php echo u('addNum')?>",
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
		url:"<?php echo u('minNum')?>",
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
			url:"<?php echo u('del')?>",
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
		location.href = "<?php echo u('order.index')?>";		
	}
	else{
	alert('您的购物车没有货品了，快去添加宝贝吧')
	location.href = "<?php echo u('entry.index')?>";		
	}
		
})
})
</script>