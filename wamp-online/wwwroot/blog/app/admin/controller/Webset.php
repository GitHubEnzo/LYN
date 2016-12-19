<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |-------------------------------------------------------------------
 * |    Author: 熊伟洋<434493420@qq.com>
 * |    WeChat: hello_McGrady
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

/**
 * 站点配置控制器
 */
namespace app\admin\controller;

/**
 * 网站配置管理控制器
 */
class Webset{
    //动作
    public function index(){
    //此处书写代码...
        $WebsetModel = new \system\model\Webset();
        if(IS_POST){
            foreach($_POST as $k=>$v){
                $WebsetModel->where('name',$k)->update(['value'=>$v]);
            }
            message('操作成功','','success');
        }
        $oldData = Db::table('webset')->get();
        View::with('oldData',$oldData);
        return view();
    }
}
