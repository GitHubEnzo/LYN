<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>欢迎登陆_苏宁易购</title>
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
    
<div>
	
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

</div>
<div>
    <div id="top">
        <a href="<?php echo u('entry.index')?>"><img src="./public/image/logo.png"/></a>
        <p>       	
            <a href=""><i class="iconfont" style="font-size:30px ;">&#xe738;</i>我想对  "登陆" 提意见</a>
        </p>
    </div>
</div>
<div id="login_all">
	<div id="login">
	    <form action="" method="post">
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe75e;</i>
				<input type="text" name="account" id="" required placeholder="请输入用户名"  />
			</div>
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe65b;</i>
				<input type="password" name="password" id="" required placeholder="请输入验密码"  />
			</div>
			<div id="code">
				<i class="iconfont" style="font-size:30px ;">&#xe699;</i>
				<input id='code_key' type="text" name="code" required placeholder="请输入验证码" value="" />
			</div>
			<img class="code" src="<?php echo u('code')?>"/> <a href="javascript:;" class="changes" style="color: orange;">换一张</a>
			<br />	
			<script type="text/javascript">
				$(function(){
					var num=0;
					$('.changes').click(function(){
						num=num+1;
						console.log(num)
						$('.code').attr('src',"index.php?s=home/login/code&num="+num)
					})
					$('.code').click(function(){
						num=num+1;
						console.log(num)
						$('.code').attr('src',"index.php?s=home/login/code&num="+num)
					})
				})
			</script>		
			<p>
			<input type="checkbox" name="" id="" value="" />
			<span id="">
				七天免登陆
			</span>
			<a href="<?php echo u('reg.index')?>">免费注册</a>
			</p>
	        <input id="login_submit" type="submit" value="登陆"/>
	    <input type='hidden' name='__TOKEN__' value='31cd2a5659e5999f01faf7bebf6a5944'/></form>
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
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/login.css"/>
