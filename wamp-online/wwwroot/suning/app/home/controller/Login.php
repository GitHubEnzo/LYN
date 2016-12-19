<?php
/** .-------------------------------------------------------------------
* |  Software: [HDCMS framework]
* |      Site: www.hdcms.com
* |-------------------------------------------------------------------
* |    Author: 向军 <2300071698@qq.com>
* |    WeChat: aihoudun
* | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
* '-------------------------------------------------------------------*/

namespace app\home\controller;

class Login {
    private $db;
    public function __construct(){
        $this->db=new \system\model\User();
    }
    //动作
    public function index(){
    //此处书写代码...
        if(IS_POST) {
            if($this->db->login()){
                $_SESSION['home']['address']=isset($_SESSION['home']['address'])?$_SESSION['home']['address']:'entry';
                message('登陆成功',u($_SESSION['home']['address'].'.index'),'success');
            }
            message($this->db->getError(),'back','error');
        }
   		$conf = ['title'=>'欢迎登陆_苏宁易购'];
		View::with('conf',$conf);
        return view();
    }
    public function code(){
    	Code::num(1)->width(120)->height(38)->make();
    }
}
