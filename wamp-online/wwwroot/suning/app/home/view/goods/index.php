<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/goods.css"/>
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
				<span><a href="">{{$condata['tname']}}</a></span>
				<i></i>
			</div>
			<span>></span>
			<span><a href="">{{$condata['gname']}}</a></span>
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
								<foreach from="$condata['big']" key="$k" value="$v">
								<li><img src="{{$v}}"/></li>
								</foreach>
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
						<span style="margin-left: 20px;color: #666">商品编码: <span>{{$condata['gnumber']}}</span></span>
					</div>

				</div>
				<div id="proinfoMain">
					<div class="proinfo-title">
						<h1 title="HUAWEI nova（4GB+64GB）CAZ-AL10 全网通 玫瑰金">
							<span id="itemNameZy">自营</span>
							{{$condata['gname']}}
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
										<i>¥</i>{{$condata['shopprice']}}. <span>00</span>
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
						<foreach from="$typeData" key="$k" value="$v">
							<div class="tzmys">
								<dt >
									<span class="w2 abc">{{$v['taname']}}</span>
								</dt>
								<dd>
									<ul class="tip-infor">
										<foreach from="$v['select']" key="$kk" value="$vv">
																					
												 	 <li class="clr-item ">
														<a href="javascript:;" style="min-width: 20px; height: 20px; line-height: 20px; margin-top:8px;">
														<!--                                            <img src="{{__ROOT__}}/public/images/0000000000-000000000174909655_1.jpg" alt="" />-->
														<i></i><span style="padding-left: 8px" >{{$vv['gtvalue']}}</span></a>
													</li>  
																							
										</foreach>
									</ul>
								</dd>
							</div>
						</foreach>
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
							<parent name="look">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--广告-->
	<div class="activity">
		<a href=""><img src="{{__ROOT__}}/public/image/ld1.jpg" alt="" /></a>
	</div>
	<!--详情，评论-->
	<div class="met15">
		<div class="procon-side">
			<div class="">
				<a href=""><img src="{{__ROOT__}}/public/image/le1.png" alt="" /></a>
			</div>
			<div class="area">
				<div class="area_title">
					<h3><span class="look">
						看了最终买
					</span></h3>
					
				</div>
				<ul class="exprec">
					<parent name="look">
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
							<img src="{{__ROOT__}}/public/images/canshu.jpg" alt="" />
						</div>
						<div class="procon-box prod-text">
							{{$condata['intro']}}
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
							<div class="ds-thread" data-thread-key="{{Q(get.gid)}}" data-title="请替换成文章的标题" data-url="请替换成文章的网址"></div>
							<!-- 多说评论框 end -->
						</div>
						<div class="procon-box shouhou">
							<img src="{{__ROOT__}}/public/images/shouhou.jpg" alt="" />
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
									var gid = {{Q('get.gid')}};
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
										url:"{{u('isgoods')}}",
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
									var gid = {{Q('get.gid')}};
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
										url:"{{u('addCart')}}",
										data:{gid:gid,num:num,spec:spec},
										success:function(data){
												location.href = "{{u('inCart.index')}}";
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
		<parent name="serve">	
</div>
<!--服务结束-->
<!--底部开始-->
	<footer>
		<parent name="footer">
	</footer>
<!--底部结束	-->
</block>
