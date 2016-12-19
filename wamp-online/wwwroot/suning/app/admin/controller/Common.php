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

class Common{
    public function __construct(){
                //验证是否是RBAC登录
        if(!Rbac::isLogin()) go("login.index");
        //验证权限
        if(!Rbac::verify()) message('对不起，您没有进入权限','','error');
    }
}
