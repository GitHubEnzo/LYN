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

class Entry extends Common{
    //动作
    public function index(){
//        $encrypted = Crypt::encrypt(' ');
//        p($encrypted);
    //此处书写代码...
        return view();
    }
//    修改密码
    public function changePass(){
        $changePass=new\system\model\Admin();
        if(IS_POST){
            if( $changePass->changePass()){
                message('修改成功','','success');
            }
            message($changePass->getError(),'','error');
        }
        return view();
    }
//    退出
    public function out(){
        session_destroy();
        session_unset();
        message('退出成功',"login.index","success");
    }
}

