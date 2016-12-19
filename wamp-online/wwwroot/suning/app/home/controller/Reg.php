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
class Reg {
    private $db;
    public function  __construct(){
        $this->db=new \system\model\User();
    }
    //动作
    public function index(){
        if(IS_POST) {
            if($this->db->reg()){
                message('注册成功，请登录','login.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        $conf = ['title'=>'欢迎注册'];
        View::with('conf',$conf);
        return view();
    }
}
