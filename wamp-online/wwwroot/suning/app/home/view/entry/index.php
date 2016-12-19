<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/entry.css"/>
<script type="text/javascript" src="{{__ROOT__}}/public/js/entry.js"></script>
<!--首屏开始-->
<block name="content">
<!--头部广告-->
<div>
	<parent name="top_ad">
</div>
<!--右边条-->
<div>
	<parent name="right_bar">
</div>
<!--顶部条-->
<div>
	<parent name="header">
</div>
<!--搜索-->	
<div>
	<parent name="search">
</div>
<div id="first_screen">
	<div id="first_screen_banner">
		<!--菜单开始-->
		<div id="menu">
			<ul id="">
				<foreach from="$cateData" key="$k" value="$v">
				<li>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
					<a href="{{u('lists.index',['cid'=>$vv['cid']])}}">{{$vv[cname]}}</a>
					</foreach>
					<div class="menu_son">
						<div class="menu_son_left">
							<div class="menu_son_top">
								<a href="{{u('lists.index',['cid'=>$v['cid']])}}">{{$v[cname]}}</a>
							</div>
							<div class="menu_son_bottom">
								<foreach from="$v[cname2]" key="$kk" value="$vv">
								<div class="menu_son_bottom_list">
									<p><a href="{{u('lists.index',['cid'=>$vv['cid']])}}">{{$vv[cname]}}</a></p>
									<div class="">
											<foreach from="$vv[cname3]" key="$kkk" value="$vvv">
											<a href="{{u('lists.index',['cid'=>$vvv['cid']])}}">{{$vvv[cname]}}
											</foreach>
									</div>
								</div>
							</foreach>
							</div>
						</div>
						<div class="menu_son_right">
							<foreach from="$brand" key="$kk" value="$vv">							
								<img src="{{$vv['logo']}}"/>
							</foreach>
						</div>

					</div>
				</li>
			</foreach>
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
<foreach from="$cateData" key="$k" value="$v">
	<!--楼层开始-->
<div class="wrapper floor floor1"  style="margin-bottom:20px ">
	<div class="floor-head">
		<div class="title">
			<h3>
				<b>F{{$v[num]}}</b>{{$v[cname]}}
			</h3>

		</div>
		<ul class="floor-tab">
			<li class="on">
				<a href=""><em>热门活动</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>黑科技</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>电脑电视</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>电脑外设</em></a>
				<span></span>
			</li>
			<li>
				<a href=""><em>电子配件</em></a>
				<span></span>
			</li>
		</ul>
	</div>
	<if value='$v[goodData][$k] == []'>
		<div class="floor-main"">
			<img src="./public/image/cart-loading.gif"/ style="margin: 200px 500px;">	
		</div>							    												     
	<else/>
		<div class="floor-main">
		<!--左侧广告-->
		<div class="side">
			<a href="{{u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])}}" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;">{{$v[goodData][8][gname]}} </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="{{$v[goodData][8][pic]}}">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<foreach from="$v[cname1]" key="$kk" value="$vv">
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em>{{$vv[cname]}}</em>
					</a>
				</li>
				</foreach>
			</ul>
			<div class="hot-word">
				<div>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
						<a href="{{u('lists.index')}}">{{$vv[cname]}}</a>
					</foreach>
				</div>
			</div>
			<div class="last-img">
				<a href="{{u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])}}">
					<p class="title" >{{$v[goodData][7][gname]}}</p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="{{$v[goodData][7][pic]}}">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="{{u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])}}">
				<p class="title" style="font-size: 20px">{{$v[goodData][6][gname]}}</p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="{{$v[goodData][6][pic]}}" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])}}">
						<p class="title">{{$v[goodData][5][gname]}}</p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="{{$v[goodData][5][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])}}">
						<p class="title">{{$v[goodData][4][gname]}}</p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="{{$v[goodData][4][pic]}}">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="{{u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])}}" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋">{{$v[goodData][3][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="{{$v[goodData][3][pic]}}" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="{{u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])}}" title="双11钟表会场">
						<p class="title" d-content="双11提前购">{{$v[goodData][2][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="{{$v[goodData][2][pic]}}" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title">{{$v[goodData][1][gname]}}</p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][1][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title">{{$v[goodData][0][gname]}}</p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][0][pic]}}">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="floor-main" style="display:none">
		<!--左侧广告-->
		<div class="side">
			<a href="{{u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])}}" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;">{{$v[goodData][3][gname]}} </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="{{$v[goodData][3][pic]}}">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<foreach from="$v[cname1]" key="$kk" value="$vv">
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em>{{$vv[cname]}}</em>
					</a>
				</li>
				</foreach>
			</ul>
			<div class="hot-word">
				<div>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
						<a href="{{u('lists.index')}}">{{$vv[cname]}}</a>
					</foreach>
				</div>
			</div>
			<div class="last-img">
				<a href="{{u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])}}">
					<p class="title" >{{$v[goodData][4][gname]}}</p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="{{$v[goodData][4][pic]}}">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="{{u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])}}">
				<p class="title" style="font-size: 20px">{{$v[goodData][5][gname]}}</p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="{{$v[goodData][5][pic]}}" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])}}">
						<p class="title">{{$v[goodData][6][gname]}}</p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="{{$v[goodData][6][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])}}">
						<p class="title">{{$v[goodData][7][gname]}}</p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="{{$v[goodData][7][pic]}}">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="{{u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])}}" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋">{{$v[goodData][8][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="{{$v[goodData][8][pic]}}" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="{{u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])}}" title="双11钟表会场">
						<p class="title" d-content="双11提前购">{{$v[goodData][0][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="{{$v[goodData][0][pic]}}" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title">{{$v[goodData][1][gname]}}</p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][1][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title">{{$v[goodData][2][gname]}}</p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][2][pic]}}">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="floor-main" style="display:none">
		<!--左侧广告-->
		<div class="side">
			<a href="{{u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])}}" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;">{{$v[goodData][5][gname]}} </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="{{$v[goodData][5][pic]}}">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<foreach from="$v[cname1]" key="$kk" value="$vv">
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em>{{$vv[cname]}}</em>
					</a>
				</li>
				</foreach>
			</ul>
			<div class="hot-word">
				<div>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
						<a href="{{u('lists.index')}}">{{$vv[cname]}}</a>
					</foreach>
				</div>
			</div>
			<div class="last-img">
				<a href="{{u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])}}">
					<p class="title" >{{$v[goodData][6][gname]}}</p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="{{$v[goodData][6][pic]}}">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="{{u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])}}">
				<p class="title" style="font-size: 20px">{{$v[goodData][7][gname]}}</p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="{{$v[goodData][7][pic]}}" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])}}">
						<p class="title">{{$v[goodData][8][gname]}}</p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="{{$v[goodData][8][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])}}">
						<p class="title">{{$v[goodData][0][gname]}}</p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="{{$v[goodData][0][pic]}}">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="{{u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])}}" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋">{{$v[goodData][1][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="{{$v[goodData][1][pic]}}" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="{{u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])}}" title="双11钟表会场">
						<p class="title" d-content="双11提前购">{{$v[goodData][2][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="{{$v[goodData][2][pic]}}" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title">{{$v[goodData][3][gname]}}</p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][3][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title">{{$v[goodData][4][gname]}}</p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][4][pic]}}">
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="floor-main" style="display:none">
		<!--左侧广告-->
		<div class="side">
			<a href="{{u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])}}" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;">{{$v[goodData][7][gname]}} </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="{{$v[goodData][7][pic]}}">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<foreach from="$v[cname1]" key="$kk" value="$vv">
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em>{{$vv[cname]}}</em>
					</a>
				</li>
				</foreach>
			</ul>
			<div class="hot-word">
				<div>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
						<a href="{{u('lists.index')}}">{{$vv[cname]}}</a>
					</foreach>
				</div>
			</div>
			<div class="last-img">
				<a href="{{u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])}}">
					<p class="title" >{{$v[goodData][8][gname]}}</p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="{{$v[goodData][8][pic]}}">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="{{u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])}}">
				<p class="title" style="font-size: 20px">{{$v[goodData][0][gname]}}</p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="{{$v[goodData][0][pic]}}" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])}}">
						<p class="title">{{$v[goodData][1][gname]}}</p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="{{$v[goodData][1][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])}}">
						<p class="title">{{$v[goodData][2][gname]}}</p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="{{$v[goodData][2][pic]}}">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="{{u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])}}" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋">{{$v[goodData][3][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="{{$v[goodData][3][pic]}}" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="{{u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])}}" title="双11钟表会场">
						<p class="title" d-content="双11提前购">{{$v[goodData][4][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="{{$v[goodData][4][pic]}}" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title">{{$v[goodData][5][gname]}}</p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][5][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title">{{$v[goodData][6][gname]}}</p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][6][pic]}}">
					</a>
				</li>
			</ul>
		</div>
		</div>
		<div class="floor-main" style="display:none">
		<!--左侧广告-->
		<div class="side">
			<a href="{{u('goods.index',['gid'=>$v[goodData][0][gid],'tid'=>$v[goodData][0][tid]])}}" class="side-img"style="background: white">
				<p class="title" style="color: #f15453;">{{$v[goodData][0][gname]}} </p>
				<p class="desc" style="color: #f15453;">1元定金翻百倍</p>
				<img alt="1元定金翻百倍" style="width: 200px;height: 200px;position: absolute;top: 10px" class="lazy-loading" src="{{$v[goodData][0][pic]}}">
				<i class="roll" style="border-color: transparent transparent transparent #f15453;"></i>
			</a>
			<ul class="entrances">
				<foreach from="$v[cname1]" key="$kk" value="$vv">
				<li>
					<a href="" >
						<img src="./public/image/jiabiao.png" alt="" /><em>{{$vv[cname]}}</em>
					</a>
				</li>
				</foreach>
			</ul>
			<div class="hot-word">
				<div>
					<foreach from="$v[cname2]" key="$kk" value="$vv">
						<a href="{{u('lists.index')}}">{{$vv[cname]}}</a>
					</foreach>
				</div>
			</div>
			<div class="last-img">
				<a href="{{u('goods.index',['gid'=>$v[goodData][1][gid],'tid'=>$v[goodData][1][tid]])}}">
					<p class="title" >{{$v[goodData][1][gname]}}</p>
					<p class="desc" style="color: #f15453;">大牌满399立减20</p>
					<img  alt="大牌满399立减20" class="lazy-loading" src="{{$v[goodData][1][pic]}}">
				</a>
			</div>
		</div>
		<!--右侧广告-->
		<div class="main-cont">
			<div class="slider">
				<a href="{{u('goods.index',['gid'=>$v[goodData][2][gid],'tid'=>$v[goodData][2][tid]])}}">
				<p class="title" style="font-size: 20px">{{$v[goodData][2][gname]}}</p>
				<p class="desc" style="color: #f15453; font-size: 20px">大牌满399立减20</p>
				<img style="width: 200px;height: 200px;float: right;" src="{{$v[goodData][2][pic]}}" alt="" />
				</a>
			</div>
			<ul class="col1">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][3][gid],'tid'=>$v[goodData][3][tid]])}}">
						<p class="title">{{$v[goodData][3][gname]}}</p>
						<p class="desc" style="color:#f15453;">跨店铺3免一</p>
						<img alt="跨店铺3免一" class="lazy-loading" src="{{$v[goodData][3][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][4][gid],'tid'=>$v[goodData][4][tid]])}}">
						<p class="title">{{$v[goodData][4][gname]}}</p>
						<p class="desc" style="color:#f15453;">报价双11提前购</p>
						<img alt="跨店铺3免一" class="lazy-loading"  src="{{$v[goodData][4][pic]}}">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a d-href="http://re.suning.com/category/340558-3/" d-title="新品潮流豆豆鞋" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic01" href="{{u('goods.index',['gid'=>$v[goodData][5][gid],'tid'=>$v[goodData][5][tid]])}}" title="新品潮流豆豆鞋">
						<p class="title" d-content="新品潮流豆豆鞋">{{$v[goodData][5][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="男士英伦真皮驾车鞋">买买买</p>
						<img cpmid="100003323" style="width: 145px;height: 145px" d-src="//image1.suning.cn/uimg/aps/material/147677458924326356.jpg" d-alt="男士英伦真皮驾车鞋" src="{{$v[goodData][5][pic]}}" alt="新品潮流豆豆鞋">
					</a>
				</li>
				<li>
					<a d-href="http://product.suning.com/0070118218/136337628.html" d-title="双11提前购" rel="nofollow" target="_blank" name="index3_homepage1_18437410295_pic02" href="{{u('goods.index',['gid'=>$v[goodData][6][gid],'tid'=>$v[goodData][6][tid]])}}" title="双11钟表会场">
						<p class="title" d-content="双11提前购">{{$v[goodData][6][gname]}}</p>
						<p class="desc" style="color:#f15453;" d-content="买就送袜子">每满100立减10元</p>
						<img cpmid="100003324" style="width: 145px;height: 145px" d-src="//image5.suning.cn/uimg/aps/material/147763919462167059.jpg" d-alt="买就送袜子" src="{{$v[goodData][6][pic]}}" alt="双11钟表会场">
					</a>
				</li>
			</ul>
			<ul class="col2">
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][7][gid],'tid'=>$v[goodData][7][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic01" title="双11钟表节">
						<p class="title">{{$v[goodData][7][gname]}}</p>
						<p class="desc" style="color:#f15453;">每满1999减50</p>
						<img alt="每满1999减50" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][7][pic]}}">
					</a>
				</li>
				<li>
					<a href="{{u('goods.index',['gid'=>$v[goodData][8][gid],'tid'=>$v[goodData][8][tid]])}}" rel="nofollow" target="_blank" name="index3_homepage1_18437410296_pic02" title="弹棉之家">
						<p class="title">{{$v[goodData][8][gname]}}</p>
						<p class="desc" style="color:#f15453;">79买一送一</p>
						<img alt="79买一送一" style="width: 145px;height: 145px" class="lazy-loading" src="{{$v[goodData][8][pic]}}">
					</a>
				</li>
			</ul>
		</div>
	</div>				
	</if>
</div>	
	</foreach>


<!--楼层导航-->
<ul id="floorMenu">
<foreach from="$cateData" key="$k" value="$v">	
    <li >{{$v[cname]}}</li>
</foreach>
</ul>

<!--楼层结束-->
<!--服务开始-->
<div>
		<parent name="serve">	
</div>
<!--服务结束-->
<!--底部开始-->
	<div id="footer">
		<parent name="footer">
	</div>
<!--底部结束	-->
</block>



