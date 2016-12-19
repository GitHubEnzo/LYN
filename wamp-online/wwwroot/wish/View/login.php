<?php
$da=include 'Public/Data/Userdata.php';
$password = md5( $_POST['password']);
//验证码正确
if($_POST['code']==$_SESSION['code']){
//    用户名密码匹配
    foreach ($da as $v){
        if($v['username']==$_POST['username']&&$v['password']==$password){
            echo 0;
            $_SESSION['username'] = $_POST['username'];
            exit;
        }
    }
//    用户名密码不匹配
    echo 1;
}
//验证码不正确
if($_POST['code']!=$_SESSION['code']){
    echo 2;
}
?>