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
 * 公共管理控制器
 */
class Common{
    //构造方法
    public function __construct(){
        if(!isset($_SESSION['admin']['uid']))
        {
            message('请先登录',u('admin.login.index'),'error');
        }
    }
}
