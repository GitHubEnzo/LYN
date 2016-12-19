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

class Category extends Common{
    //动作
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db=new \system\model\Category();
    }

    public function index(){
    //此处书写代码...
//        $data=Db::table('Category')->where('pid',0)->get();
//        foreach($data as $k => $v ){
//            $cid= $this->db->getson($catedata,$v['cid']);
//            $cid[]=$v['cid'];
//            $sondata=Db::table('Category')->whereIN('cid',$cid)->get();
//            $treesondata = Data::tree($sondata,'cname');
//            P( $treesondata);
//            $cids=$v['cid'];
//            $datas='sondata'.$cids;
//            p($datas);
//            View::with($datas,$treesondata);
//        }
        $catedata=Db::table('Category')->orderby('cid','ASC')->get();
        $catedata=Data::tree($catedata,'cname');
        View::with('data',$catedata);
        return view();
    }
    //添加
    public function add(){
        if(IS_POST) {
            if($this->db->add()){
                message('添加成功','Category.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        return view();
    }
    //编辑
    public function edit(){
        if(IS_POST) {
            if($this->db->edit()){
                message('编辑成功','Category.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        $cid=Q('get.cid');
        $olddata=Db::table('Category')->where('cid',$cid)->first();
        $cateData = $this->db->getCateData($cid);
//        p($cateData);
        View::with('cateData',$cateData);
        View::with('olddata',$olddata);
        $typedata=Db::table('type')->get();
        View::with('typedata',$typedata);
        return view();
    }
    //子集添加
    public function addson(){
        if(IS_POST) {
            if($this->db->add()){
                message('编辑成功','Category.index','success');
            }
            message($this->db->getError(),'back','error');
        }
        $catedata=Db::table('Category')->where('cid',Q('get.cid'))->first();

        $typedata=Db::table('type')->get();
        View::with('typedata',$typedata)->with('catedata',$catedata);
        return view();
    }
    //删除
    public function del()
    {
        $cid = Q('cid');
        //通过父级的cid获取父级的pid
        $pid = Db::table('category')->where('cid',$cid)->pluck('pid');
        //执行替换子集pid 替换成父级的pid
        $this->db->where('pid',$cid)->update(['pid'=>$pid]);
        //执行删除父级那一条数据
        $this->db->where('cid',$cid)->delete();
        //提示跳转
        message('删除成功','','success');
    }
}
