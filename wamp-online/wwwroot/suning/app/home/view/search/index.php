<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/search.css"/>
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
<div id="goods">
<if value='$Data == []'>
  	<div class="car-hidden">
            <h2>
                                抱歉。。。该分类下面还没有上架产品！！！！
            <br>
                                请选择其他分类！！
           </h2>
           </div>  
<else>   
<foreach from="$Data" key="$k" value="$v">
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
</if>
</div>			
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