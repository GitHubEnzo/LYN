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

class Link extends Common{
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db=new \system\model\Link();
    }

    //动作
    /*
     * 显示列表
     */
    public function index(){
    //此处书写代码...
        $data=Db::table('link')->orderBy('lid','ASC')->paginate(8);
        $page=$data->links();
       return view()->with('data',$data)->with('page',$page);
    }
    /*
     * 添加
     */
    public function add(){
        if(IS_POST){
            if($this->db->add()){
                message('添加成功','index','success');
            }else{
                message($this->db->getError(),'','error');
            }
        }
        return view();
    }
    /*
     * 删除
     */
    public function del(){
        $lid=q('get.lid');
        $this->db->where('lid',$lid)->delete();
        message('删除成功','index','success');

    }
    /*
     * 修改
     */
    public function edit(){
      $lid=Q('get.lid');
        if(IS_POST){
            if($this->db->edit()){
                message('修改成功','index','success');
            }else{
                message($this->db->getError(),'','error');
            }
        }
        $oldData=Db::table('link')->where('lid',$lid)->first();
        return view()->with('oldData',$oldData);
    }
}
