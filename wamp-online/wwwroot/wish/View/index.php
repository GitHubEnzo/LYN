<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./View/js_css/style.css">
    <script src="./View/js_css/jquery-1.8.2.min.js"></script>
    <script src="./View/js_css/index.js"></script>
</head>
<body>
	<audio id="mic" src="Public/Haunted.mp3" loop="loop" autoplay="autoplay"></audio>
	
<nav>
    <div id="wood"></div>
    <?php if(!isset($_SESSION['username'])): ?>
    <li class="reg">注册</li>
    <li class="login">登陆</li>
    <?php else: ?>
    <li class="wish">许愿</li>
    <a href="?fun=next" style="color:black"><li class="next">退出</li></a>
    <?php endif ?>
</nav>
<form action="javascript:;" id="reg" method="post" role="form" >
    <ul>
        <li>用 户 名：<input type="text" id="regin"  name="username" placeholder="请输入用户名" required><span id="regu" ></span></li>
        <li>密&nbsp;&nbsp;码：<input type="password" name="password" id="regp" required></li>
        <a href="javascript:;" class="bt delbt">取消</a>
        <input type="submit" class="bt regbt" value="注册" disabled>
    </ul>
</form>
<form action="javascript:;" id="login">
    <ul>
        <li>用户名：<input type="text"  name="username" required><span id="regu" ></span></li>
        <li>密&nbsp;码：<input type="password" name="password" required></li>
        <li>验证码：<input type="text" name="code" required></li>
        <img src="?fun=code" onclick="this.src = this.src + '&mt=' + Math.random() " alt="" >
        <a href="javascript:;" class="bt delbt">取消</a>
        <input type="submit" class="bt regbt" value="登录" >
    </ul>
</form>
<form action="javascript:;" id="write">
    <p>昵称：<span><?php echo $_SESSION['username'] ?></span></p>
    <textarea name="wish" id="" cols="40" rows="15" required placeholder="限定字数为45字以内" ></textarea>
    <a href="javascript:;" class="bt delbt">取消</a>
    <input type="submit" class="bt regbt" value="许愿" >
</form>
<?php foreach($this->data as $k => $v): ?>
    <div class="paper" style="top:<?php echo mt_rand(50,500) ?>px;left:<?php echo mt_rand(50,800) ?>px">
        <p class='id'><?php echo $v['username'] ?></p>
        <p class="content"><?php echo $v['wish'] ?></p>
        </div>
<?php endforeach ?>

</body>
</html>
