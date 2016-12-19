<?php
class HomeController {
    private $data;
    public function __construct(){

        $this->data=include './Public/Data/Wishdata.php';
    }
//
//    显示首页
    public function index(){
        include './View/index.php';
    }
//    显示验证码
    public function code(){
        $code = new Code();
        $code->make();
    }
//    检测用户名
    public function uname(){
        include './View/uname.php';
    }
//    注册
    public function reg(){
        include './View/reg.php';
    }
//    登陆
    public function login(){
        include './View/login.php';
    }
//    退出
    public function next(){
        session_unset();
        session_destroy();
        message('退出成功','index.php');
        }
//    异步添加愿望
    public function wish(){
        include './View/wish.php';
    }
    public function pass(){
        include 'View/pass.php';
    }

}
?>