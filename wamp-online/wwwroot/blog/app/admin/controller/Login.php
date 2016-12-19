<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |-------------------------------------------------------------------
 * |    Author: 熊伟洋<434493420@qq.com>
 * |    WeChat: hello_McGrady
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace app\admin\controller;

/**
 * 首页管理控制器
 */
class Login{
    private $db;
    //构造方法
    public function __construct()
    {
        $this->db = new \system\model\User();
    }

    //动作
    public function index(){
        if(IS_POST)
        {
            if($this->db->login()){
                message('登陆成功',u('entry.index'),'success');
            }
                message($this->db->getError(),'back','error');
        }
        //显示页面
        return view();
    }

    //验证码
    public function code(){
        Code::num(1)->make();
    }
}
