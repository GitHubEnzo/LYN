<?php
/** .-------------------------------------------------------------------
* |  Software: [HDCMS framework]
* |      Site: www.hdcms.com
* |-------------------------------------------------------------------
* |    Author: 向军 <2300071698@qq.com>
* |    WeChat: aihoudun
* | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
* '-------------------------------------------------------------------*/

namespace app\admin\controller;

class Login {
    private $db;
    public function __construct(){
        $this->db=new \system\model\Admin();
    }

    //动作
    public function index()
    {
        if(IS_POST) {

            if($this->db->login()){
                message('登陆成功','entry.index','success');
            }
            message($this->db->getError(),'back','error');
        }
            //此处书写代码...
            return view();
        }
//    验证码
    public function code(){
        Code::num(1)->make();
    }
}
