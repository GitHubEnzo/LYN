<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title></title>
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
    
	<!--头部广告-->
<div>
	
<div id="top_ad" >
    <a href="">
        <img src="./public/image/top_ad.jpg"/>
    </a>
</div>
<i class="icon iconfont close">&#xe724;</i>
<i class="icon iconfont open">&#xe728;</i>

</div>
<!--右边条-->
<div>
	
<div id="right_bar">
    <ul>
        <li>
            <a href=""><i class="iconfont" >&#xe75e;</i></a>
            <P>
                <a href=""><i class="iconfont" >&#xe698;</i></a>
                <a href="" style="color: white; font-size: 12px;">购<br>物<br>车</a>
            </P>
            <a href=""><i class="iconfont" >&#xe65b;</i></a>
            <a href=""><i class="iconfont" >&#xe69b;</i></a>
            <a href=""><i class="iconfont" >&#xe6c1;</i></a>
            <a href=""><i class="iconfont" >&#xe699;</i></a>
        </li>
        <li>
            <a href=""><i class="iconfont" >&#xe741;</i></a>
            <a href=""><i class="iconfont" >&#xe738;</i></a>
            <a href=""><i class="iconfont" >&#xe749;</i></a>
            <a href="" class="back"><i class="iconfont" >&#xe770;</i></a>
        </li>
    </ul>
</div>

</div>
<!--顶部条-->
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
<!--搜索-->	
<div>
	
<div id="">
    <div id="logo_search">
        <a href="<?php echo u('entry.index')?>"><img id="logo" src="./public/image/logo.png"/></a>
        <img src="./public/image/ad.gif"/>
        <div id="search">
            <form action="<?php echo u('search.index')?>" method="post">
                <i class="iconfont">&#xe6ac;</i>
                <input type="text" name="search_key" id="search_key" value=""  placeholder="新款 macbook pro 抢先预购"/>
                <input type="submit" value="搜索"id='search_submit'/ >
            <input type='hidden' name='__TOKEN__' value='31cd2a5659e5999f01faf7bebf6a5944'/></form>
            <div id="search_font">
                <?php if(!empty($homegoodsData)){ foreach ($homegoodsData as $k=>$v){?>
                <a href="<?php echo u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])?>"><?php echo $v[gname]?></a>
                <?php }}?>
            </div>
        </div>
        <img src="./public/image/ad.jpg"/>
    </div>
</div>

<!--搜索结束-->
<!--导航条开始-->
<div id="nav_bar_all">
    <div id="nav_bar">
        <div id="goods">
            <a>全部商品分类</a>
        </div>
        <div id="nav_index">
            <?php if(!empty($catedata1)){ foreach ($catedata1 as $k=>$v){?>
            <li><a src=""><?php echo $v[cname]?></a></li>
            <?php }}?>
        </div>
    </div>
</div>

</div>
<div id="goods">
<?php if($Data == []){?>
                
  	<div class="car-hidden">
            <h2>
                                抱歉。。。该分类下面还没有上架产品！！！！
            <br>
                                请选择其他分类！！
           </h2>
           </div>  
<?php }else{?>   
<?php if(!empty($Data)){ foreach ($Data as $k=>$v){?>
	<div class="goods">
		<div class="goods_tp">
			<img src="<?php echo $v['pic']?>" style="width: 200px;"/>
		</div>
		<div class="goods_tp_mini">
			<img src="<?php echo $v['pic']?>" style="width: 38px;"/>
		</div>
		<div class="goods_message">
			<span class="price">￥<?php echo $v['shopprice']?>.00</span>
			<p>
				<a href="<?php echo u('goods.index',['gid'=>$v['gid'],'tid'=>$v['tid']])?>"><?php echo $v['gname']?></a>
			</p>
			<p>评论：<span>123</span><a href="" class="collect">收藏</a></p>
			<br />
			<br />
			<p><a href="">苏宁自营</a></p>						
		</div>
	</div>
<?php }}?>

               <?php }?>
</div>			
<!--服务开始-->
<div >
		
	<div id="serve_all" >
		<div id="serve">
			<div class="serve">
				<img src="./public/image/s1.png"/>
				<p>		
					<a href=""  class="serve_title">政企采购</a>
					<br />
					<a href="" class="serve_content">为企业用户量身定做的采购平台，优选苏宁易购全站商品，
					<br/>为企业采购提供专业化的一站式采购解决方案。</a>
				</p>
			</div>
			<div class="serve">
				<img src="./public/image/s2.png"/>
				<p>		
					<a href=""  class="serve_title">苏宁众包</a>
					<br />
					<a href="" class="serve_content">以苏宁全渠道包销为主要特点，整合全社会众包资源，
					<br/>扶持创新企业，推广创新产品。</a>
				</p>
			</div>
			<div class="serve s3">
			<img src="./public/image/s3.png"/>
			<p>		
				<a href=""  class="serve_title">身边苏宁</a>
				<br />
				<a href="" class="serve_content">全国300个城市1600家门店
				<br/>3000个服务点为您提供最贴心的服务！</a>
			</p>
			</div>
		</div>
	</div>
	
</div>
<!--服务结束-->
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
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/search.css"/>
