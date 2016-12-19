<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>提交订单</title>
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
    
<!--顶部开始-->
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
<div id="">
	<!--顶部logo-->
	<div id="order_header">
		<a href="<?php echo u('entry.index')?>"><img src="./public/image/logo.png"/></a>
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
								<?php if(!empty($data)){ foreach ($data as $k=>$v){?>
								<li class="addr1" adid='<?php echo $v['adid']?>'>
									<div class="inner">
										<div class="addr-hd">
											<span><?php echo $v['name']?></span>
										</div>
										<div class="addr-bd">
											<span class='ads' > <?php echo $v[sheng]?> <?php echo $v[shi]?> <?php echo $v[xianqu]?> <?php echo $v[address]?></span>
											</br>	
											<span class="phone"><?php echo $v['phone']?></span>									
										</div>
										<a href="" class="selected"></a>
									</div>									
								</li>
								<?php }}?>
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
							<?php if(!empty($_SESSION['cart']['goods'])){ foreach ($_SESSION['cart']['goods'] as $k=>$v){?>

							<tr class="product">
									<th>
										<div class="product-box">
											<a href=""><img src="<?php echo $v['pic']?>" alt="" /></a>
											<div class="detail">
												<p><a href=""><?php echo $v['name']?></a></p>
												<p><?php echo $v['name']?></p>
												<p>7天无理由退货</p>
											</div>
										</div>
									</th>
									<th>服务信息</th>
									<th>¥ <?php echo $v['price']?></th>
									<th><?php echo $v['num']?></th>
									<th>¥ <?php echo $v['total']?></th>
								</tr>
							<?php }}?>
								<tr>
									<td colspan="3"></td>
									<td style="height: 50px;">运费</td>
									<td>¥00.00</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td style="height: 50px;">合计</td>
									<td style="color: red;">¥<?php echo $_SESSION['cart']['total']?></td>
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
						<p style="text-align: end;"><?php echo $_SESSION['cart']['total_rows']?>件商品 总计：¥<?php echo $_SESSION['cart']['total']?></p>
						<p style="text-align: end;">运费：¥0.00</p>
						<p style="text-align: end;">优惠：-¥0.00</p>
						<p style="text-align: end;">优惠券/卡：-¥0.00</p>
						<p></p>
					</div>
				</div>
				<div class="step5">
					<p style="text-align: right;">应付金额：<span style="color: red;font-size: 25px;">¥<?php echo $_SESSION['cart']['total']?></span></p>
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
	<input type='hidden' name='__TOKEN__' value='31cd2a5659e5999f01faf7bebf6a5944'/></form>
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
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/order.css"/>
<script type="text/javascript" src="<?php echo __ROOT__?>/public/js/area.js"></script>	
</script>

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
		$.post("<?php echo u('add')?>",data,function(res){
			if(res.valid)
			{//成功
				//参数：提示消息，跳转地址，成功/失败
				location.href = "<?php echo u('Order.index')?>";
//				util.message(res.message,"<?php echo u('submit.index')?>",'success');
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
			url:"<?php echo u('save')?>",
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