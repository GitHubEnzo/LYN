<?php
include 'Public/functions.php';
//开启session
session_start();
//自动载入被使用的类
function __autoload($className){
    if(substr($className,'-10')=='Controller'){
        include "./Controller/{$className}.php";
    }else{
        include "./Tool/{$className}.php";
    }
}
//通过get地址参数获得被使用的方法名
$fun=isset($_GET['fun'])?$_GET['fun']:'index';
//定义方法名常数全局使用
define('FUN',$fun);
//实例化类
$controller=new HomeController();
//使用方法
$controller->$fun();
?>
