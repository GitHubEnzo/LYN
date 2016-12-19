<extend file='../home'></extend>
<link rel="stylesheet" type="text/css" href="{{__ROOT__}}/public/css/reg.css"/>
<block name="content">
<!--顶部条-->
<div>
	<parent name="header">
</div>
<div>
    <div id="top">
        <a href="{{u('entry.index')}}"><img src="./public/image/logo.png"/></a>
        <li><span>欢迎注册</span></li>
        <p>
            <span>我已经注册，马上</span><a href="{{u('login.index')}}">登陆></a>
        </p>
    </div>
</div>
<div id="re_all">
	<div id="reg">
	    <div id="reg_top">
			
	    </div>
	    <form action="" method="post">
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe75e;</i>
				<input type="text" id="" value="" required name="account" placeholder="请输入用名"/>
			</div>
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe65b;</i>
				<input type="password" id="" value="" required name="password"placeholder="请输入密码，建议含义大小写，不少于9位"/>
			</div>
			<div id="">
				<i class="iconfont" style="font-size:30px ;">&#xe65b;</i>
				<input type="password" id="" value="" required name="affirm" placeholder="确认密码" />
			</div>
	        <input id="reg_submit" type="submit" value="注册"/>
	    </form>
	</div>
</div>

<!--底部开始-->
<footer>
    <parent name="footer">
</footer>
<!--底部结束	-->
</block>