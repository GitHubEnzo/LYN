<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/lists.css"/>
<style>
		.hover{
			background: #FF7700;
			color: white;
		}
		</style>
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
<!--热门推荐开始-->
<div id="">
	<div id="recommend">
		<foreach from='$hot' key='$k' value='$v'>		
			<div>
				<img src="{{$v['pic']}}"/>
				<p >
				<a href="{{u('goods.index',['gid'=>$v[gid],'tid'=>$v[tid]])}}">{{$v['gname']}}</a>
				<span>￥{{$v['shopprice']}}</span>
				</p>
			</div>					
		</foreach>							
		</div>
</div>		
<!--热门推荐结束-->
<!--导航条开始-->
<div id="">
	<div id="navbar">
		<a href="{{u('entry.index')}}"><h3>首页></h3></a>
		<foreach from='$fatherData' key='$k' value='$v'>
			<a href="{{u('lists.index',['cid'=>$v['cid']])}}"><h3>{{$v['cname']}}></h3></a>
		</foreach>		
	</div>
</div>
<!--导航条结束-->
<!--列表开始-->
<div id="">
	<div id="screen">
		<div id="screen_left">
			<div id="screen_left_top">
				<h2><p>服装鞋帽</p></h2>	
				<div class="screen_left_top_classes">
					<h3>男装</h3>
					<div class="screen_left_top_class">
						<a href="">男士衬衫</a>						
						<a href="">男士衬衫</a>
						<a href="">男士衬衫</a>
						<a href="">男士衬衫</a>
					</div>
				</div>			
			</div>
			<div id="screen_left_ad">
				<img src="./public/image/gd1.jpg"/>
			</div>
			<div id="screen_left_bottom">
				<h3><p class="looks">浏览此目录顾客最终购买</p></h3>					
								<!--看了又看引入-->
								<parent name="look">

			</div>
		</div>
		<div id="screen_right">
			<div id="screen_right_top1">
				<p>品牌</p>
				<div class="">
					<foreach from='$brand' key='$k' value='$v'>
					<a href="">
						<img src="{{$v['logo']}}"/>
					</a>
					</foreach>
				</div>
			</div>
			<div id="screen_right_top2">
			<foreach from="$finalTempAttr" key="$k" value="$v">				
				<div class="screen_right_top2_son">
					<p>{{$v['name']}}</p>
					<?php
							//变量接收一下 为了不破坏$param
							$temp = $param;
							//为了给无限做准备
							$temp[$k] = 0;
						?>
					<div class="">
						<a <if value="$param[$k] == 0">class="hover"</if> href="{{u('index',['cid'=>Q('get.cid'),'param'=>implode('_',$temp)])}}">不限</a>						
						<foreach from="$v['value']" key="$kk" value="$vv">
							<?php $temp[$k] = $vv['gtid'] ?>									
	 						<a <if value="$param[$k] == $vv['gtid']">class="hover"</if> href="{{u('index',['cid'=>Q('get.cid'),'param'=>implode('_',$temp)])}}">{{$vv['gtvalue']}}</a>									
						</foreach>
					</div>
				</div>	
				</foreach>			
			</div>
			<div id="screen_right_top3">
			
			</div>
			<div id="goods">
			<foreach from="$goodsData" key="$k" value="$v">
				<div class="goods">
					<div class="goods_tp">
						<img src="{{$v['pic']}}" style="width: 200px;"/>
					</div>
					<div class="goods_tp_mini">
						<img src="{{$v['pic']}}" style="width: 38px;"/>
					</div>
					<div class="goods_message">
						<span class="price">￥{{$v['shopprice']}}.00</span>
						<p>
							<a href="{{u('goods.index',['gid'=>$v['gid'],'tid'=>$v['tid']])}}">{{$v['gname']}}</a>
						</p>
						<p>评论：<span>123</span><a href="" class="collect">收藏</a></p>
						<br />
						<br />
						<p><a href="">苏宁自营</a></p>						
					</div>
				</div>
			</foreach>	
				
			</div>
		</div>
	</div>
</div>
<!--列表结束-->

<!--服务开始-->
<div >
		<parent name="serve">	
</div>
<!--服务结束-->
<!--底部开始-->
	<footer>
		<parent name="footer">
	</footer>
<!--底部结束	-->
</block>
