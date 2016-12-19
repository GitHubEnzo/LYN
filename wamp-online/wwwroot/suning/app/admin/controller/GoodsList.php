<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |-------------------------------------------------------------------
 * |    Author: 熊伟洋<chelious@foxmail.com>
 * |    WeChat: hello_McGrady
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace app\admin\controller;

class GoodsList extends Common{
    private $db;
    public function __construct()
    {   parent::__construct();
        $this->db=new \system\model\Goodslist();
    }
    //动作
    public function index(){
        $gid = Q('get.gid');
        $taname = Db::table('type_attr')
            ->where('class',1)
            ->where('gid', $gid)
            ->join('goods','type_attr.tid','=','goods.tid' )
            ->lists('taname');
        //此处书写代码...
        $data=Db::table('goods_list')->where('gid', $gid)->get();
        foreach($data as $k=>$v){
            $data[$k]['combine']=explode(',',$v['combine']);
        }
        return view()->with('data',$data)->with('taname',$taname);
    }

    //添加
    public function add(){
        if(IS_POST){
            if($this->db->add()){
                message('添加成功',u('index',['gid'=>Q('get.gid')]),'success');
            }
            message($this->db->getError(),'','error');
        }
        $gid = Q('get.gid');
        //首先把类型属性表的规格所有数据拿出来
        $data = Db::table('type_attr')
            ->join('goods','type_attr.tid','=','goods.tid' )
            ->where('gid',$gid)
            ->where('class',1)
            ->get();
        //关联商品属性表，首先根据taid条件来获得选中的所有的规格
        foreach($data as $k=>$v){
            $data[$k]['select'] = Db::table('goods_attr')
                                    ->where('taid',$v['taid'])
                                    ->where('gid',$gid)
                                    ->get();
        }
        View::with('data',$data);
        return view();
    }
    //编辑
    public function edit(){
        if(IS_POST){
            if($this->db->edit()){
                message('编辑成功',u('index',['gid'=>Q('get.gid')]),'success');
            }
            message($this->db->getError(),'','error');
        }
        $gid = Q('get.gid');
        $glid = Q('get.glid');
        $taname = Db::table('type_attr')
            ->where('class',1)
            ->where('gid', $gid)
            ->join('goods','type_attr.tid','=','goods.tid' )
            ->lists('taname');
        $data=Db::table('goods_list')->where('gid', $gid)->where('glid',$glid)->first();
        $data['combine']=explode(',',$data['combine']);
        return view()->with('data',$data)->with('taname',$taname);
    }
    public function del(){
        Db::table('goods_list')->where('glid',q('get.glid'))->delete();
        message('删除成功',u('index',['gid'=>Q('get.gid')]),'success');
    }
}
