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

class Type extends Common{
    //动作
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db=new \system\model\Type();
    }

    public function index(){
    //此处书写代码...
        $data=Db::table('type')->paginate(6);
        $page=$data->links();
        View::with('page',$page)->with('data',$data);
        return view();
    }
//    添加
    public function add(){
        if(IS_POST) {
            if($this->db->add()){
                message('添加成功','type.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        return view();
    }
    //编辑
    public function edit(){
        if(IS_POST) {
            if($this->db->edit()){
                message('编辑成功','type.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        $olddata=Db::table('type')->where('tid',Q('get.tid'))->first();
        View::with('olddata',$olddata);
        return view();
    }
    //删除
    public function del(){
        $this->db->where('tid',Q('get.tid'))->delete();
        message('删除成功','type.index','success');
    }
}
?>