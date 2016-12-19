<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/order.css"/>
<script type="text/javascript" src="{{__ROOT__}}/public/js/area.js"></script>	
</script>
<block name="content">
<!--顶部开始-->
<div>
	<parent name="header">
</div>
<div id="">
	<!--顶部logo-->
	<div id="order_header">
		<a href="{{u('entry.index')}}"><img src="./public/image/logo.png"/></a>
		<img id="order_tp" src="./public/image/order.png"/>
	</div>
			<div class="cart-header">
			<div class="cart-box">
				<div class="step1">
					<div class="step1-title">
						<b>配送信息</b>
					</div>
					<div class="step1-content">
						<div class="addr-list">
							<ul>
								<foreach from='$data' key='$k' value="$v">
								<li class="addr1" adid='{{$v['adid']}}'>
									<div class="inner">
										<div class="addr-hd">
											<span>{{$v['name']}}</span>
										</div>
										<div class="addr-bd">
											<span class='ads' > {{$v[sheng]}} {{$v[shi]}} {{$v[xianqu]}} {{$v[address]}}</span>
											</br>	
											<span class="phone">{{$v['phone']}}</span>									
										</div>
										<a href="" class="selected"></a>
									</div>									
								</li>
								</foreach>
								<li class="addr2">
								</li>								
							</ul>
						</div>
<!--						<div class="nearby-self">-->
<!--							<span>选择自提点并下单</span>>-->
<!--							<span>收到提货短信</span>><span>到自提点自提</span>-->
<!--						</div>-->
					</div>
				</div>
				<div class="step2">
					<div class="step2-title">
						<b>支付方式</b>
					</div>
					<div class="step2-content">
						<ul class="clearfix">
							<li class="selected">
								<span>在线支付</span><i></i>
							</li>
							<li>
								<span>货到付款(现金)</span><i></i>
							</li>
							<li>     
								<span>货到付款(POS刷卡)</span><i></i>
							</li>
							<li>
								<span>门店付款</span><i></i>
							</li>
						</ul>
					</div>
				</div>
				<div class="step3">
					<div class="step3-title">
						<b class="l">商品及服务信息</b>
						<a href="">返回我的购物车修改</a>
					</div>
					<div class="step3-content">
						<table class="cart-table">
							<tbody>
							<tr class="table-title">
									<th><span>苏宁自营</span></th>
									<th>服务信息</th>
									<th>单价</th>
									<th>数量</th>
									<th>小计</th>
								</tr>
							<foreach from="$_SESSION['cart']['goods']" key="$k" value="$v">

							<tr class="product">
									<th>
										<div class="product-box">
											<a href=""><img src="{{$v['pic']}}" alt="" /></a>
											<div class="detail">
												<p><a href="">{{$v['name']}}</a></p>
												<p>{{$v['name']}}</p>
												<p>7天无理由退货</p>
											</div>
										</div>
									</th>
									<th>服务信息</th>
									<th>¥ {{$v['price']}}</th>
									<th>{{$v['num']}}</th>
									<th>¥ {{$v['total']}}</th>
								</tr>
							</foreach>
								<tr>
									<td colspan="3"></td>
									<td style="height: 50px;">运费</td>
									<td>¥00.00</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td style="height: 50px;">合计</td>
									<td style="color: red;">¥{{$_SESSION['cart']['total']}}</td>
								</tr>
							</tbody>

						</table>
					</div>
				</div>
				<div class="step4">
					<div class="step4-title">
						<b>结算信息</b>
					</div>
					<div class="step4-content">
						<p>使用优惠券 (无可用优惠券)</p>
						<p>使用苏宁卡/贵宾卡/乐购仕卡</p>
						<p>使用推荐号</p>
						<p style="text-align: end;">{{$_SESSION['cart']['total_rows']}}件商品 总计：¥{{$_SESSION['cart']['total']}}</p>
						<p style="text-align: end;">运费：¥0.00</p>
						<p style="text-align: end;">优惠：-¥0.00</p>
						<p style="text-align: end;">优惠券/卡：-¥0.00</p>
						<p></p>
					</div>
				</div>
				<div class="step5">
					<p style="text-align: right;">应付金额：<span style="color: red;font-size: 25px;">¥{{$_SESSION['cart']['total']}}</span></p>
					<p style="text-align: right;">收货信息：<span style="color: #333;" class="saddress"></span></p>
					<p style="text-align: right;">支付方式：<span style="color: #333;">在线支付</span></p>
					<p><a href="javasprict:;" class="btn" >提交订单</a></p>
				</div>
			</div>
		</div>
</div>
	<div class="from">
	<div class="content">
	<div class="title">
	<h3>新增配送信息</h3>
	</div>
	<div class="frombox">
	<form action="" method="post" id='form' onsubmit=" return add()">
	<a href="javascript:;" class="closed" title="关闭">X</a>
	<p><span>收货人:</span> <input type="text" required name="name"/></p>
	<p><span>手机:</span>  <input type="text" required name="phone"/></p>
	<p><span>备用电话:</span> <input type="text" required name="phone2"/></p>
	<p><span>所在地区:</span>
<!--					<div class="f2r">-->
<select required name="sheng" id="area1"></select>
	<select required name="shi" id="area2"></select>
	<select required name="xianqu" id="area3"></select>
	<!--					</div>-->
	</p>

	<p><span>详细地址:</span> <input type="text" required name="address" /></p>
	<p><input type="checkbox" name="default"  id="" class="checkbox" value="1"/>设为默认地址</p>
	<input type="submit" required class="btns" style="background: orange; width:50px ; height: 30px; text-align: center;line-height: 30px;" value="保存"/>
	</form>
	</div>
	</div>
	</div>
<!--底部开始-->
<footer>
	<parent name="footer">
</footer>
<!--底部结束	-->
</block>
<script>
	$(function () {
//		选地址
		$('.addr1').click(function () {			
			$(this).addClass('select').siblings().removeClass('select').find('.selected').css({display:'none'});
			$(this).find('.selected').css({display:'block'});
			var ads=$(this).find('.ads').text()
			$('.saddress').text(ads);
			$('.btn').css({background: '#FA4B4B'})			
		})
//		弹出地址窗口
		$('.addr2').click(function () {			
				$('.from').css({display:'block'});				
			})
//		关闭弹窗
		$('.closed').click(function () {			
				$('.from').css({display:'none'});				
			})	

		//初始化方法
		area.init('area');
		//执行修改时候默认选中效果
//		area.selected("黑龙江","佳木斯","抚远县")
	})
//	添加地址
	function add()
	{
		var data = $('#form').serialize();
		//res返回的数据：{valid:0,message:'提示信息'}
		$.post("{{u('add')}}",data,function(res){
			if(res.valid)
			{//成功
				//参数：提示消息，跳转地址，成功/失败
				location.href = "{{u('Order.index')}}";
//				util.message(res.message,"{{u('submit.index')}}",'success');
			}else{
//				util.message(res.message,"",'error');
			}
		},"json");
		return false;
	}
	if($('.select').length==0){		
	$('.btn').css({background: '#cccccc'})
	}
	$('.btn').click(function () {
	if($('.select').length>0){
	var adid=$('.select').attr('adid')
		$.ajax({
			type:'post',
			url:"{{u('save')}}",
			data:{adid:adid},
			success:function(data){
					location.href = "index.php?s=home/pay/index&oid="+data;
			}
		});	
	}else{
		alert('请选择地址')
	}					
})	
</script>