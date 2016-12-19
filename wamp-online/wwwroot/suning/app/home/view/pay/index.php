<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>{{$conf['title']}}</title>
    	<link rel="icon" href="favicon.ico" />
        <script type="text/javascript" src="{{__ROOT__}}/resource/hdjs/js/jquery.min.js"></script>    	
		<link rel="stylesheet" href="{{__ROOT__}}/public/css/pay.css" />	
	</head>
	<body>
		<div class="header">
			<div class="header-box">
				<div class="header-title">
					<img src="public/image/T13IFgXjlaXXXXXXXX.png" alt="" />
					<span>我的收银台</span>
				</div>
				<ul class="header-right">
					<li>支付宝账户: <span>18003882400</span></li>
					<li><a href="">找人代付</a></li><li><span>|</span></li>
					<li>唯一热线: <span>95188</span></li>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="order">
				<img src="public/image/canvas.png" alt="" />
				<div class="order-wrapper">
					<div class="order-title">
						<p>订单号：{{$data['number']}}</p>
						<p>卖家昵称：苏宁自营 </p>
					</div>
					<div class="order-amount">
						<em>{{$data['total']}}.00</em>元
						<a href=""><img src="public/image/shuaxin.png" alt="" /></a>
					</div>
				</div>
			</div>
			<div class="payMethod">
				<div class="payMethod-box">
					<div class="payMethod-bank">
						<div class="banks">
							<input type="radio" name="" id="" value="" checked=''/>
							<img src="public/image/1234.png" style="width: 100px;" alt="" title="招商银行信用卡" />
							<span class="card-number">**4678</span>
							<span class="card-type">信用卡 | 快捷</span>
							<span class="pay-amount"><span>支付</span><em>{{$data['total']}}.68</em>元</span>
						</div>
					</div>
					<div class="manage-list">
						<a href="">其他付款方式 </a>
						<a href="" class="qita">其他付款方式 </a>
					</div>
					<div class="zhifu">
						<div class="jiance">
							<img src="public/image/duihao.png" alt="" /><span>你在安全的环境中，请放心使用！</span>
						</div>
						<div class="password">
							<p><span>支付宝支付密码： </span></p>
							<p><input type="password" name="" id="key" value="" required /><a href="">忘记密码？</a></p>
						</div>
					</div>
					<div class="btn">
						<if value='$data["status"] == "未付款"'>
						<a href="javascript:;" class="pays" value="{{$data['number']}}">确认付款</a>					    												     
						<else/>
						<a href="javascript:;" >该订单已支付</a>
						</if>

					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>支付宝版权所有 2004-2016 <a href="">ICP证：沪B2-20150087 </a></p>
		</div>
		<div class="partner">
			<img src="public/image/2R3cKfrKqS.png" alt="" />
		</div>
	</body>
</html>
<script type="text/javascript">
	$(function(){
		$('.pays').click(function(){
			if($('#key').val()==''){
				alert('请填写密码')
			}else{
				if($(this).text()=='确认付款'){
			var  jq_this=$(this);
			var num=$(this).attr('value');
			data={num:num}
			$.post("{{u('pay')}}",data,function(res){
				jq_this.text('支付完成');
				if(confirm('付款成功，查看我的个人中心')){			
				 location.href = "index.php?s=home/orderlist/index"
				}
				},"json");
				return false;
			}	
			}
				
		})		
	})
</script>