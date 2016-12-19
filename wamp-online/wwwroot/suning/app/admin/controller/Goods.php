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

class Goods{
    private $db;
    public function __construct()
    {
        $this->db = new \system\model\Goods();
    }

    //动作
    public function index(){
    //此处书写代码...
        $data = Db::table('goods')->orderBy('gid','DESC')->paginate(6);
        $page = $data->links();
        View::with('data',$data)->with('page',$page);
        return view();
    }
    //添加
    public function add(){
        //1.处理所属类型和所属品牌;
        //2.开始jq,通过change()方法中 :selected来抓到选中的tid 并且给隐藏域补上了value值;
        //3.进行判断顶级分类不能添加商品;
        //4.发送异步到控制器中的getAttr()，并且获得tid对应的类型属性的所有数据;
        //5.回到异步当中，处理商品属性和商品规格;
        //6.先循环再判断是否为属性或者规格;
        //7.属性的情况,循环出属性值;
        //8.规格的情况，循环出属性值，接着是附加价格以及添加按钮;(异步结束)
        //9.按钮的jq;注意添加按钮和删除按钮的class。
        //10.回到控制器中用到模型中store(),***打印表单提交的数据***;
        //11.接着处理模型中的store();
        //12.store()方法三张表的添加，商品表的添加，详情表的添加，商品属性表的添加。
        if(IS_POST){
            if($this->db->add()){
                message('添加成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        //处理所处分类
        $cateData = Data::tree(Db::table('category')->get(),'cname');
        View::with('cateData',$cateData);
        //处理所属品牌
        $brandData = Db::table('brand')->get();
        View::with('brandData',$brandData);
        return view();
    }

    //异步获得类型属性
    public function getAttr(){
        $tid = Q('post.tid');
        $typeAttr = Db::table('type_attr')->where('tid',$tid)->get();
        foreach($typeAttr as $k=>$v){
            $typeAttr[$k]['tavalue'] = explode(',',$v['tavalue']);
        }
        echo json_encode($typeAttr);exit;
    }

    //编辑
    public function edit(){
        if(IS_POST){
            if($this->db->edit()){
                message('编辑成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        $gid = Q('get.gid');
        //1.获取商品表和详情表的旧数据
        $oldData = Db::table('goods')
                ->join('detail','goods.gid','=','detail.gid')
                ->where('goods.gid',$gid)
                ->first();
        //把中图转为数组
        $oldData['big'] = explode(',',$oldData['big']);
        View::with('oldData',$oldData);
        //2.处理所属分类
        $cateData = Data::tree(Db::table('category')->get(),'cname');
        View::with('cateData',$cateData);
        //3.处理所属品牌
        $brandData = Db::table('brand')->get();
        View::with('brandData',$brandData);
        //4.处理商品属性
        //类型属性表的属性数据
        $attrData = Db::table('type_attr')
                    ->where('tid',$oldData['tid'])
                    ->where('class',2)
                    ->get();
        foreach($attrData as $k=>$v){
            $attrData[$k]['tavalue'] = explode(',',$v['tavalue']);
        }
        //选中的商品属性
        $goodsAttrData = Db::table('goods_attr')
                    ->where('gid',$gid)
                    ->lists('gtvalue');
        View::with('attrData',$attrData)->with('goodsAttrData',$goodsAttrData);
        //5.处理商品规格
        $specData = Db::table('goods_attr')
                    ->join('type_attr','goods_attr.taid','=','type_attr.taid')
                    ->where('class',1)
                    ->where('gid',$gid)
                    ->get();
        foreach($specData as $k=>$v){
            $specData[$k]['tavalue'] = explode(',',$v['tavalue']);
        }
        View::with('specData',$specData);
        return view();

    }
    //删除
    public function del(){
        $this->db->where('gid',Q('gid'))->delete();
        $goodsAttr = new \system\model\GoodsAttr();
        $goodsAttr->where('gid',Q('gid'))->delete();
        $detail= new \system\model\Detail();
        $detail->where('gid',Q('gid'))->delete();
        message('删除成功','index','success');
    }
}
