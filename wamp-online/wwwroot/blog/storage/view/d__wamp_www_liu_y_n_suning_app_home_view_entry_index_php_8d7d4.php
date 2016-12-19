<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>苏宁易购</title>
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
<div id="first_screen">
	<div id="first_screen_banner">
		<!--菜单开始-->
		<div id="menu">
			<ul id="">
				<?php if(!empty($cateData)){ foreach ($cateData as $k=>$v){?>
				<li>
					<?php if(!empty($v[cname2])){ foreach ($v[cname2] as $kk=>$vv){?>
					<a href="<?php echo u('lists.index',['cid'=>$vv['cid']])?>"><?php echo $vv[cname]?></a>
					<?php }}?>
					<div class="menu_son">
						<div class="menu_son_left">
							<div class="menu_son_top">
								<a href="<?php echo u('lists.index',['cid'=>$v['cid']])?>"><?php echo $v[cname]?></a>
							</div>
							<div class="menu_son_bottom">
								<?php if(!empty($v[cname2])){ foreach ($v[cname2] as $kk=>$vv){?>
								<div class="menu_son_bottom_list">
									<p><a href="<?php echo u('lists.index',['cid'=>$vv['cid']])?>"><?php echo $vv[cname]?></a></p>
									<div class="">
											<?php if(!empty($vv[cname3])){ foreach ($vv[cname3] as $kkk=>$vvv){?>
											<a href="<?php echo u('lists.index',['cid'=>$vvv['cid']])?>"><?php echo $vvv[cname]?>
											<?php }}?>
									</div>
								</div>
							<?php }}?>
							</div>
						</div>
						<div class="menu_son_right">
							<?php if(!empty($brand)){ foreach ($brand as $kk=>$vv){?>							
								<img src="<?php echo $vv['logo']?>"/>
							<?php }}?>
						</div>

					</div>
				</li>
			<?php }}?>
			</ul>
		</div>
		<!--菜单结束-->
		<!--轮播图开始-->
		<div id="run_tp">
			
			<div class="shuffling">
	<!--默认选中显示-->
	<div class="sf_picture">
		<img src="./public/image/a1.jpg" alt="" />
		<img src="./public/image/a2.jpg" alt="" />
		<img src="./public/image/a3.jpg" alt="" />
		<img src="./public/image/a4.jpg" alt="" />
		<img src="./public/image/a5.jpg" alt="" />
		<img src="./public/image/a6.jpg" alt="" />
		<img src="./public/image/a1.jpg" alt="" />
	</div>
<!--圆点-->
	<ul>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
<!--左右切换-->
	<p class="sf_left"><</p>
	<p class="sf_right">></p>
</div>
		</div>
		<!--轮播图结束-->
		<!--公告开始-->
		<div id="notice">
				<img src="public/image/gg.png"/>
		</div>
		<!--公告结束-->
	</div>

</div>
<!--首屏结束-->
<!--活动长广告开始-->
<div id="ad_long_1">
	<div class="ad_long_1_top">
		<img src="public/image/a1.png"/>
	</div>
	<a href=" ">
	<div class="ad_long_1_buttom">
	<img src="public/image/l1.jpg"/>
	<img src="public/image/l2.jpg"/>
	<img src="public/image/l3.jpg"/>
	<img src="public/image/l4.jpg"/>
	<img src="public/image/l5.jpg"/>
	</div>
	</a>	
</div>
<div id="ad_long_1">
	<div class="ad_long_1_top">
		<img src="public/image/a2.png"/>
	</div>
	<a href="">
	<div class="ad_long_1_buttom">
	<img src="public/image/l6.jpg"/>
	<img src="public/image/l7.jpg"/>
	<img src="public/image/l8.jpg"/>
	<img src="public/image/l9.jpg"/>
	</a>
	</div>	
</div>
<!--活动长广告结束-->
<!--滚动条开始-->
<div id="runs_bar_all">
	<div id="run_bar">
		<p id='run_bar_left'><</p>
		<p id='run_bar_right'>></p>
		<div id="run_bar_all">
			<div class="run_bar_num">
				<img src="./public/image/b1.jpg"/>
				<img src="./public/image/b2.jpg"/>
				<img src="./public/image/b3.jpg"/>
				<img src="./public/image/b4.jpg"/>
			</div>
			<div class="run_bar_num">
				<img src="./public/image/b5.jpg"/>
				<img src="./public/image/b6.jpg"/>
				<img src="./public/image/b7.jpg"/>
				<img src="./public/image/b8.jpg"/>
			</div>
			<div class="run_bar_num">
				<img src="./public/image/b1.jpg"/>
				<img src="./public/image/b2.jpg"/>
				<img src="./public/image/b3.jpg"/>
				<img src="./public/image/b4.jpg"/>
			</div>
		</div>
	</div>
</div>
<!--滚动条结束-->
<?php if(!empty($cateData)){ foreach ($cateData as $k=>$v){?>
	<!--楼层开始-->
<div class="wrapper floor floor1"  style="margin-bottom:20px ">
	<div class="floor-head">
		<div class="title">
			<h3>
				<b>F<?php echo $v[num]?></b><?php echo $v[cname]?>
			</h3>

		</div>
		<ul class="floor-tab">
			<li class="on">
				<a href=""><em>热门活动</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>绅士男装</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>女装内衣</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>运动户外</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>鞋包配饰</em></a>
				<span></span>
			</li>
		</ul>
	</div>
	<?php if($v[goodData][$k] == []){?>
                
		<div class="floor-main"">
			<img src="./public/image/cart-loading.gif"/ style="margin: 200px 500px;">	
		</div>							    												     
	<?php }else{?>
		<div class="floor-main"">
		<!--左侧广告-->
		<div class="side">
			<a href="<?php echo u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])?>" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;"><?php echo $v[goodData][0][gname]?> </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="<?php echo $v[goodData][0][pic]?>">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<?php if(!empty($v[cname1])){ foreach ($v[cname1] as $kk=>$vv){?>
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em><?php echo $vv[cname]?></em>
					</a>
				</li>
				<?php }}?>
			</ul>
			<div class="hot-word">
				<div>
					<?php if(!empty($v[cname2])){ foreach ($v[cname2] as $kk=>$vv){?>
						<a href="<?php echo u('lists.index')?>"><?php echo $vv[cname]?></a>
					<?php }}?>
				</div>
			</div>
			<div class="last-img">
				<a href="<?php echo u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])?>">
					<p class="title" ><?php echo $v[goodData][1][gname]?></p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="<?php echo $v[goodData][1][pic]?>">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="<?php echo u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])?>">
				<p class="title" style="font-size: 20px"><?php echo $v[goodData][2][gname]?></p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="<?php echo $v[goodData][2][pic]?>" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="<?php echo u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])?>">
						<p class="title"><?php echo $v[goodData][3][gname]?></p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="<?php echo $v[goodData][3][pic]?>">
					</a>
				</li>
				<li>
					<a href="<?php echo u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])?>">
						<p class="title"><?php echo $v[goodData][4][gname]?></p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="<?php echo $v[goodData][4][pic]?>">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="<?php echo u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])?>" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋"><?php echo $v[goodData][5][gname]?></p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="<?php echo $v[goodData][5][pic]?>" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="<?php echo u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])?>" title="双11钟表会场">
						<p class="title" d-content="双11提前购"><?php echo $v[goodData][6][gname]?></p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="<?php echo $v[goodData][6][pic]?>" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="<?php echo u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])?>" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title"><?php echo $v[goodData][7][gname]?></p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="<?php echo $v[goodData][7][pic]?>">
					</a>
				</li>
				<li>
					<a href="<?php echo u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])?>" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title"><?php echo $v[goodData][8][gname]?></p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="<?php echo $v[goodData][8][pic]?>">
					</a>
				</li>
			</ul>
		</div>
	</div>				
	
               <?php }?>
	
	<?php }}?>
</div>

<!--楼层导航-->
<ul id="floorMenu">
<?php if(!empty($cateData)){ foreach ($cateData as $k=>$v){?>	
    <li ><?php echo $v[cname]?></li>
<?php }}?>
</ul>

<!--楼层结束-->
<!--服务开始-->
<div>
		
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
	<div id="footer">
		
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

	</div>
<!--底部结束	-->

</div>
<!--主体部分结束-->
<!--服务-->

<!--底部开始-->

<!--底部结束-->
</body>
</html></extend>
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/entry.css"/>
<script type="text/javascript" src="<?php echo __ROOT__?>/public/js/entry.js"></script>
<!--首屏开始-->




