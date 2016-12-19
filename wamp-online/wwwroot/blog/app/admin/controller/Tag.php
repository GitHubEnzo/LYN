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
 * 标签管理控制器
 */
class Tag extends Common{
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Tag();
    }

    //动作
    public function index(){
    //此处书写代码...
        $data = Db::table('tag')->paginate(8);
        $page = $data->links();
        View::with('data',$data)->with('page',$page);
        return view();
    }

    public function add(){
        if(IS_POST){
            if($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        return view();
    }

    //编辑
    public function edit()
    {
        if(IS_POST){
            if($this->db->edit()){
                message('编辑成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        $tid = Q('get.tid');
        $oldData = Db::table('tag')->where('tid',$tid)->first();
        View::with('oldData',$oldData);
        return view();
    }

    //删除
    public function del()
    {
        $tid = Q('get.tid');
        $this->db->where('tid',$tid)->delete();
        message('删除成功','','success');
    }
}
