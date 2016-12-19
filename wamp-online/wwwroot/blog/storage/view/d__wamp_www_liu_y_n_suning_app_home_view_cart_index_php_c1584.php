<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>购物车</title>
    <link rel="icon" href="http://localhost/Liu.Y.N/suning/favicon.ico" />
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
                <em class="icon iconfont " id="bus">&#xe698;</em><a href="<?php echo u('cart.index')?>">购物车</a>
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
                <a href="">客户服务</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
        </div>
        <!--顶部条右结束-->
        <!--登陆、注册-->
        <div id="login_reg">
            <?php if($_SESSION['home']['uid']){?>
                
                <a href="<?php echo u('orderlist.index')?>" id="login"><?php echo $_SESSION['home']['account']?></a>
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
		<select name="">
			<option value="" selected>北京</option>
			<option value="">上海</option>
			<option value="">天津</option>
			<option value="">重庆</option>			
		</select>
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
<div id="">
	<div id="by">
		<input type="checkbox" name="" id="" value="" />
		<img src="./public/image/lion.png"/>
		<h3>苏宁自营</h3>
	</div>
</div>
<div id="">
	<div class="cart_goods">
		<p><input type="checkbox" name="" id="" value="" /></p>
		<div class="">
			<img src="./public/image/c1.jpg"/>
			<div class="words">
				<a href="">Apple iPhone 7 Plus 32GB 黑色 移动联通电信4G手机</a>
				<br>
				<img src="./favicon.ico"/>
			</div>
		</div>
		<div class="cart_details">
			<span>颜色：E款红栗子</span>
		</div>
		<div class="cart_details">
			<span>¥ 289.00</span>
		</div>
		<div class="cart_details">
			<span>	
					<input class="min" name="" type="button" value="-" />  
					<input class="text_box" name="" type="text" value="1" max="10"/>  
					<input class="add" name="" type="button" value="+" /> 
			</span>
		</div>
		<div class="cart_details">
						<span>¥ 289.00</span>
		</div>
		<div class="cart_details">
						<span>移入收藏</span>
		</div>
	</div>
</div>
<!--提交-->
<div class="">
	<div class="submit">
		<div class="submit_left">
			<input type="checkbox" name="" id="" value="" />全选
			<a href="">删除选中商品</a>
		</div>
		<div class="submit_right">
			<a href="<?php echo u('order.index')?>">去结算</a>
		</div>
	</div>
	
</div>
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
<script type="text/javascript" src="./public/js/cart.js">
	
</script>
