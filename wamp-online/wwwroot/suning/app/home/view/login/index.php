<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/login.css"/>
<block name="content">
<div>
	<parent name="header">
</div>
<div>
    <div id="top">
        <a href="{{u('entry.index')}}"><img src="./public/image/logo.png"/></a>
        <p>       	
            <a href=""><i class="iconfont" style="font-size:30px ;">&#xe738;</i>我想对  "登陆" 提意见</a>
        </p>
    </div>
</div>
<div id="login_all">
	<div id="login">
	    <form action="" method="post">
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe75e;</i>
				<input type="text" name="account" id="" required placeholder="请输入用户名"  />
			</div>
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe65b;</i>
				<input type="password" name="password" id="" required placeholder="请输入验密码"  />
			</div>
			<div id="code">
				<i class="iconfont" style="font-size:30px ;">&#xe699;</i>
				<input id='code_key' type="text" name="code" required placeholder="请输入验证码" value="" />
			</div>
			<img class="code" src="{{u('code')}}"/> <a href="javascript:;" class="changes" style="color: orange;">换一张</a>
			<br />	
			<script type="text/javascript">
				$(function(){
					var num=0;
					$('.changes').click(function(){
						num=num+1;
						console.log(num)
						$('.code').attr('src',"index.php?s=home/login/code&num="+num)
					})
					$('.code').click(function(){
						num=num+1;
						console.log(num)
						$('.code').attr('src',"index.php?s=home/login/code&num="+num)
					})
				})
			</script>		
			<p>
			<input type="checkbox" name="" id="" value="" />
			<span id="">
				七天免登陆
			</span>
			<a href="{{u('reg.index')}}">免费注册</a>
			</p>
	        <input id="login_submit" type="submit" value="登陆"/>
	    </form>
	</div>
</div>

<!--底部开始-->
<footer>
    <parent name="footer">
</footer>
<!--底部结束	-->
</block>