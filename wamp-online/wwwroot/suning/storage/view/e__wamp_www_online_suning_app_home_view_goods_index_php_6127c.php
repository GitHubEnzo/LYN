<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>苏宁易购</title>
    <link rel="icon" href="favicon.ico" />
    <link href="http://localhost/online/suning/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://localhost/online/suning/resource/hdjs/js/jquery.min.js"></script>
    <script type="text/javascript" src='http://localhost/online/suning/public/js/home.js'></script>
    <script type="text/javascript" src="http://localhost/online/suning/libs/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/online/suning/public/css/home.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/online/suning/public/icon/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/online/suning/libs/functions.css"/>
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
            <li><a href="<?php echo u('lists.index',['cid'=>$v['cid']])?>"><?php echo $v[cname]?></a></li>
            <?php }}?>
        </div>
    </div>
</div>

</div>
<div id="">
	<!--中间-->
	<div id="spbox">
		<div id="mid_top">
			<a href="" id="category1" class="ft">手机/数码/配件</a>
			<span>></span>
			<div class="dropdown">
				<span><a href="">手机通讯</a></span>
				<i></i>
			</div>
			<span>></span>
			<div class="dropdown">
				<span><a href="">手机</a></span>
				<i></i>
			</div>
			<span>></span>
			<div class="dropdown">
				<span><a href=""><?php echo $condata['tname']?></a></span>
				<i></i>
			</div>
			<span>></span>
			<span><a href=""><?php echo $condata['gname']?></a></span>
		</div>
		<div class="wrapper pronfo">
			<div class="proinfo-container">
				<div class="proinfo-left">
					<div id="imgZoom" class="imgzoom">
						<!--放大镜开始*********************************************-->
						<div class="magnify">
							<!--中图-->
							<div class="mf_picture">
							</div>
							<!--小图-->
							<ul>
								<?php if(!empty($condata['big'])){ foreach ($condata['big'] as $k=>$v){?>
								<li><img src="<?php echo $v?>"/></li>
								<?php }}?>
								<p class="magnify_left"><</p>
								<p class="magnify_right">></p>
							</ul>
							<!--大图-->
							<div class="mf_picture_big">
								<img src="" alt="" />
							</div>
							<!--	遮罩-->
							<div class="film">
							</div>
							<!--特大图-->
							<div class="mf_picture_max">
							</div>
							<!--小块-->
							<div class="patch">
							</div>
						</div>
						<!--放大镜结束*********************************************-->

					</div>
					<div style="padding-top: 20px">
						<span style="margin-left: 20px;color: #666">商品编码: <span><?php echo $condata['gnumber']?></span></span>
					</div>

				</div>
				<div id="proinfoMain">
					<div class="proinfo-title">
						<h1 title="HUAWEI nova（4GB+64GB）CAZ-AL10 全网通 玫瑰金">
							<span id="itemNameZy">自营</span>
							<?php echo $condata['gname']?>
						</h1>
						<h2 id="promotionDesc">
							买即送自拍杆+内存卡+移动电源，数量有限，赠完即止！
							<br />

						</h2>
						<a href="javascript:;" class="enter-compare">+对比</a>
					</div>
					<div id="priceDom">
						<div id="mainPrice" style="position: relative";>
							<dl class="price-promo">
								<dt>
									<span class="w3">易购价</span>
								</dt>
								<dd>
									<span class="mainprice">
										<i>¥</i><?php echo $condata['shopprice']?>. <span>00</span>
									</span>
								</dd>
							</dl>
						</div>

					</div>
					<dl class="support-panel">
						<dt>
							<span>支持</span>
						</dt>
						<dd>
							<span id="yjhx" style="display: block;">
		                        <a href="" class="yjfx blue-bg" rel="" target="" name="">
									<i class="icon"></i>以旧换新
								</a>
		                    </span>
		                    <span id="hdfk" style="display: block;">
		                        <a href="" class="yjfx blue-bg" rel="" target="" name="">
									<i class="icon"></i>货到付款
								</a>
		                    </span>
						</dd>
					</dl>
					<div class="dash-line"></div>
					<div class="tzm">
						<?php if(!empty($typeData)){ foreach ($typeData as $k=>$v){?>
							<div class="tzmys">
								<dt >
									<span class="w2 abc"><?php echo $v['taname']?></span>
								</dt>
								<dd>
									<ul class="tip-infor">
										<?php if(!empty($v['select'])){ foreach ($v['select'] as $kk=>$vv){?>
																					
												 	 <li class="clr-item ">
														<a href="javascript:;" style="min-width: 20px; height: 20px; line-height: 20px; margin-top:8px;">
														<!--                                            <img src="<?php echo __ROOT__?>/public/images/0000000000-000000000174909655_1.jpg" alt="" />-->
														<i></i><span style="padding-left: 8px" ><?php echo $vv['gtvalue']?></span></a>
													</li>  
																							
										<?php }}?>
									</ul>
								</dd>
							</div>
						<?php }}?>
						<!--                        <div class="tzmfs">-->
						<!--                            <dt>购买方式</dt>-->
						<!--                            <dd>-->
						<!--                                <ul class="clearfix">-->
						<!--                                    <li class="selected">-->
						<!--                                        <a href="javascript:;">裸机-->
						<!--                                            <i></i>-->
						<!--                                        </a>-->
						<!--                                    </li>-->
						<!--                                    <li class="">-->
						<!--                                        <a href="javascript:;">移动赠费版-->
						<!--                                            <i></i>-->
						<!--                                        </a>-->
						<!--                                    </li>-->
						<!--                                </ul>-->
						<!--                            </dd>-->
						<!--                        </div>-->
						<div class="tzmyb">
							<dt>
								<span class="w2">延保</span>
							</dt>
							<dd>
								<ul>
									<li class="" style="border: 1px solid orange;">
										<a href="javascript:;" >
											<i></i><span >碎屏保1年  ¥98.00</span>
										</a>
										<i class=""></i>
									</li>
								</ul>
							</dd>
							<dd>
								<ul>
									<li>
										<a href="javascript:;">
											<i></i><span>延长保修1年129.00</span>
										</a>
										<i></i>
									</li>
								</ul>
							</dd>
							<dd>
								<ul>
									<li>
										<a href="javascript:;">
											<i></i><span>意外保障2年199.00</span>
										</a>
										<i></i>
									</li>
								</ul>
							</dd>
						</div>
						<div class="tzmcount">
							<dt><span class="w2">数量</span></dt>
							<dd>
								<input class="min" name="" type="button" value="-" />
								<input type="text" value="1" max="15" class="textBox"/>
								<input class="add" name="" type="button" value="+" />							
								<span style="color: red;" class="inventory"></span>
							</dd>
						</div>
						
					</div>
					<div class="mainbtns">
						<a href="javascript:;" class="btn-dark">请选择规格</a>
						<a href="javascript:;" class="btn-orange">加入购物车</a>			    												     					
					</div>
					
					<div class="cshopBox">
						<div class="cshop-title">
							<h3><span class="look">看了又看</span></h3>
							
						</div>
						<div class="cshop-list">
							
<div class="area">
	<ul>
		<?php if(!empty($homegoodsData)){ foreach ($homegoodsData as $k=>$v){?>				
		<li>
			<a href="<?php echo u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])?>">
				<img src="<?php echo $v['pic']?>" alt="" />
			</a>
			<p>
				<span>
					<i>¥</i>
					<em><?php echo $v['shopprice']?></em>
					<label class="com-label ml10">赠</label>
				</span>
				<a href="<?php echo u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])?>"><?php echo $v['gname']?></a>
			</p>
		</li>
		<?php }}?>
	</ul>
</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!--广告-->
	<div class="activity">
		<a href=""><img src="<?php echo __ROOT__?>/public/image/ld1.jpg" alt="" /></a>
	</div>
	<!--详情，评论-->
	<div class="met15">
		<div class="procon-side">
			<div class="">
				<a href=""><img src="<?php echo __ROOT__?>/public/image/le1.png" alt="" /></a>
			</div>
			<div class="area">
				<div class="area_title">
					<h3><span class="look">
						看了最终买
					</span></h3>
					
				</div>
				<ul class="exprec">
					
<div class="area">
	<ul>
		<?php if(!empty($homegoodsData)){ foreach ($homegoodsData as $k=>$v){?>				
		<li>
			<a href="<?php echo u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])?>">
				<img src="<?php echo $v['pic']?>" alt="" />
			</a>
			<p>
				<span>
					<i>¥</i>
					<em><?php echo $v['shopprice']?></em>
					<label class="com-label ml10">赠</label>
				</span>
				<a href="<?php echo u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])?>"><?php echo $v['gname']?></a>
			</p>
		</li>
		<?php }}?>
	</ul>
</div>

				</ul>
			</div>
		</div>
		<div class="procon">
			<div class="tabarea">
				<div class="procon-toolbar">
					<ul class="tabarea-items">
						<li class="tabarea-lis surrent">
							<a href="javascript:;">产品详情</a>
						</li>
						<li class="tabarea-lis">
							<a href="javascript:;">包装及参数</a>
						</li>
						<li class="tabarea-lis">
							<a href="javascript:;">评价</a>
						</li>
						<li class="tabarea-lis">
							<a href="javascript:;">售后保障</a>
						</li>
					</ul>
				</div>
				<div class="procon-desc">
					<div class="prod-content">
						<div class="prod-canshubiao">
							<img src="<?php echo __ROOT__?>/public/images/canshu.jpg" alt="" />
						</div>
						<div class="procon-box prod-text">
							<?php echo $condata['intro']?>
						</div>
						<div class="procon-box procon-bzhecanshu">
							<table class="procon-table">
								<tbody>
								<tr>
									<th colspan="3">包装清单</th>
								</tr>
								<tr>
									<td class="name">包装清单</td>
									<td class="val">手机x1、充电器x1、USB 线x1、快速指南x1、三包证明x1、取卡针x1、耳机x1</td>
									<td class="err"></td>
								</tr>
								</tbody>
								<tbody>
								<tr>
									<th colspan="3">包装清单</th>
								</tr>
								<tr>
									<td class="name">包装清单</td>
									<td class="val">手机x1、充电器x1、USB 线x1、快速指南x1、三包证明x1、取卡针x1、耳机x1</td>
									<td class="err"></td>
								</tr>
								<tr>
									<td class="name">包装清单</td>
									<td class="val">手机x1、充电器x1、USB 线x1、快速指南x1、三包证明x1、取卡针x1、耳机x1</td>
									<td class="err"></td>
								</tr>
								<tr>
									<td class="name">包装清单</td>
									<td class="val">手机x1、充电器x1、USB 线x1、快速指南x1、三包证明x1、取卡针x1、耳机x1</td>
									<td class="err"></td>
								</tr>

								</tbody>
							</table>
						</div>
						<div class="procon-box procon-pinglun">
							<!-- 多说评论框 start -->
							<div class="ds-thread" data-thread-key="<?php echo Q(get.gid)?>" data-title="请替换成文章的标题" data-url="请替换成文章的网址"></div>
							<!-- 多说评论框 end -->
						</div>
						<div class="procon-box shouhou">
							<img src="<?php echo __ROOT__?>/public/images/shouhou.jpg" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var duoshuoQuery = {short_name:"yishao"};
		(function() {
			var ds = document.createElement('script');
			ds.type = 'text/javascript';ds.async = true;
			ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
			ds.charset = 'UTF-8';
			(document.getElementsByTagName('head')[0]
			|| document.getElementsByTagName('body')[0]).appendChild(ds);
		})();
		
	</script>
	<!-- 多说公共JS代码 end -->

	<SCRIPT type=text/javascript>
		$(function(){
			//商品选项JS

			$('.clr-item').click(function(){

				$(this).addClass("selected").siblings().removeClass("selected");
			})
			$('.clearfix li').click(function(){
				$(this).addClass("selected").siblings().removeClass("selected");
			})
			$('.tzmyb li').click(function(){
				var val=$(this).attr('class');
				if(val=='selecteda'){
					$(this).removeClass("selecteda");
				}else{
					$(this).addClass("selecteda");
				}
//
			})
			var t = $(".textBox");
			$('.min').attr('disabled',true);
			$(".add").click(function(){
				t.val(parseInt(t.val())+1)
				if (parseInt(t.val())!=1){
					$('.min').attr('disabled',false);
				}

			})
			$(".min").click(function(){
				t.val(parseInt(t.val())-1);
				if (parseInt(t.val())==1){
					$('.min').attr('disabled',true);
				}

			})
			$(".tabarea-lis").click(function(){
				$(this).addClass("surrent").siblings().removeClass("surrent");
				var hao=$(".tabarea-lis").index(this);
				$('.procon-box').eq(hao).css({display:"block"}).siblings('.procon-box').css({display:"none"});
			})

		})
	</SCRIPT>
	<script>
						$(function(){
							$('.clr-item').click(function(){
//										console.log($('.abc').length);
//										console.log($('.selected').length);
										
								if($('.selected').length>=$('.abc').length){
									//主键
									var gid = <?php echo Q('get.gid')?>;
									//数量
									var num = $('.textBox').val();
									//规格
									var spec = '';
									$.each($('.selected'),function(k,v){
										spec += $(this).find('span').html() + ',';
									});
//									console.log(spec);
									$.ajax({
										type:'post',
										url:"<?php echo u('isgoods')?>",
										data:{gid:gid,num:num,spec:spec},
										success:function(data){
											console.log(data);
											if(data==0){
											$('.inventory').text('库存：0')
											$('.btn-dark').text('暂无现货')	
											}else{
												$('.inventory').text('库存：'+data)
												$('.btn-dark').text('有现货')	
											}
										}
									});
								}
							})
							$('.btn-orange').click(function(){

								if($('.selected').length>=$('.abc').length){
									//主键
									var gid = <?php echo Q('get.gid')?>;
									//数量
									var num = $('.textBox').val();
									//规格
									var spec = '';
									$.each($('.selected'),function(k,v){
										spec += $(this).find('span').html() + ',';
									});
									if($('.btn-dark').text()=='有现货'){
										$.ajax({
										type:'post',
										url:"<?php echo u('addCart')?>",
										data:{gid:gid,num:num,spec:spec},
										success:function(data){
												location.href = "<?php echo u('inCart.index')?>";
										}
									});
									}else{
									alert('对不起您选择的规格暂无现货！请选择其他规格');
								}
									
								}else{
									alert('请选择规格！！！');
								}
							})
						})
					</script>
</div>
<div id="clear">
	
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
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/goods.css"/>

