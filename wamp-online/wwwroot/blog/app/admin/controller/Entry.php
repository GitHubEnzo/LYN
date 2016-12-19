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
class Entry extends Common{
    //动作
    public function index()
    {
    //此处书写代码...
        //显示页面
        return view();
    }

    //修改密码
    public function changePass()
    {
        $changePass = new \system\model\User();
        if(IS_POST)
        {
            if($changePass->changePass())
            {
                message('修改成功','','success');
            }
            message($changePass->getError(),'','error');
        }
        return view();
    }
}
