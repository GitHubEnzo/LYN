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
 * 分类管理控制器
 */
class Category extends Common{
    private  $db;
    //构造方法
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Category();
    }

    //动作
    public function index(){
    //此处书写代码...
        //select cid,cname from category
        $data = Db::table('category')->get();
        $treeData = Data::tree($data,'cname');
//        p($treeData);
        View::with('treeData',$treeData);
        return view();
    }

    //添加
    public function add(){
        if(IS_POST){
            if($this->db->store()){
                message('添加成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        return view();
    }

    //添加子类
    public function addSon()
    {
        if(IS_POST)
        {
            if($this->db->store()){
                message('添加子类成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        $cid = Q('cid');
        //获得所属分类(父级分类名称)
        $cateData = Db::table('category')->where('cid',$cid)->field(['cid','cname'])->first();
        View::with('cateData',$cateData);
        return view();
    }

    //编辑
    public function edit()
    {
        if(IS_POST)
        {
            if($this->db->edit()){
                message('编辑成功','','success');
            }
            message($this->db->getError(),'','error');
        }
        $cid = Q('cid');
        //获得旧数据
        $oldData = Db::table('category')->where('cid',$cid)->first();
        View::with('oldData',$oldData);
        //p($oldData);
        //获得所属分类数据(调用模型方法)
        $cateData = $this->db->getCateData($cid);
        //p($cateData);
        //在option当中通过自己的pid去找寻父级的cid进行默认选中
        View::with('cateData',$cateData);
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
