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
 * 文章管理控制器
 */
class Article extends Common{
    private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Article();
    }

    //动作
    public function index(){
    //此处书写代码...
        $data = Db::table('article')->where('is_recycle',1)->orderBy('aid','DESC')->paginate(6);
        $page = $data->links();
        $newData = $data->toArray();
        foreach($newData as $k=>$v){//将cid变成cname (关联)获取分类
            $newData[$k]['category_cid'] = Db::table('category')->where('cid',$v['category_cid'])->pluck('cname');
        }
        View::with('newData',$newData)->with('page',$page);
        return view();
    }

    //添加
//    util.message(res.message,"{{u('index')}}",'success')
    public function add(){
        if(IS_POST){
            if($this->db->store()){
                message('添加成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        //所属分类
        $cateData = Data::tree(Db::table('category')->get(),'cname');
        View::with('cateData',$cateData);
        //标签数据
        $tagData = Db::table('tag')->get();
        View::with('tagData',$tagData);
        return view();
    }

    //编辑
    public function edit(){
        if(IS_POST){
            if($this->db->edit()){
                message('编辑成功',u('index'),'success');
            }
            message($this->db->getError(),'','error');
        }
        $aid= Q('get.aid');
        //1.获取文章表和文章数据表的旧数据
        $oldData = Db::table('article')->join('article_data','aid','=','article_aid')->where('aid',$aid)->first();
        View::with('oldData',$oldData);
        //2.获得所属分类全部的分类名并且树状
        $cateData = Db::table('category')->get();
        $cateData = Data::tree($cateData,'cname');
        View::with('cateData',$cateData);
        //3.获得所有的标签表数据
        $tagData = Db::table('tag')->get();
        View::with('tagData',$tagData);
        //4.获得已添加在文章标签表所有的tag_tid
        $arcTag = Db::table('article_tag')->where('article_aid',$aid)->lists('tag_tid');
        View::with('arcTag',$arcTag);
        //p($arcTag);
        //p($tagData);
        return view();
    }

    //回收站首页
    public function recycle(){
        $data = Db::table('article')->where('is_recycle',2)->orderBy('aid','DESC')->paginate(6);
        $page = $data->links();
        $newData = $data->toArray();
        foreach($newData as $k=>$v){
            $newData[$k]['category_cid'] = Db::table('category')->where('cid',$v['category_cid'])->pluck('cname');
        }
        View::with('newData',$newData)->with('page',$page);
        return view();
    }

    //删除到回收站
    public function delRecycle(){
        $aid = Q('get.aid');
        $this->db->where('aid',$aid)->update(['is_recycle'=>2]);
        message('删除到回收站成功','','success');
    }

    //回收站还原
    public function reduction(){
        $aid = Q('get.aid');
        $this->db->where("aid",$aid)->update(["is_recycle"=>1]);
        message("还原成功","","success");
    }

    //彻底删除
    public function realDel(){
        $aid = Q('get.aid');
        //删除文章表
        $this->db->where('aid',$aid)->delete();
        //删除文章数据表
        $ArticleData = new \system\model\Article_data();
        $ArticleData->where('article_aid',$aid)->delete();
        //删除文章标签表
        $ArticleTag = new \system\model\Article_tag();
        $ArticleTag->where('article_aid',$aid)->delete();
        message('彻底删除成功',u('recycle'),'success');
    }
}
