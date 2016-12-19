<?php
/** .-------------------------------------------------------------------
* |  Software: [HDCMS framework]
* |      Site: www.hdcms.com
* |-------------------------------------------------------------------
* |    Author: 向军 <2300071698@qq.com>
* |    WeChat: aihoudun
* | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
* '-------------------------------------------------------------------*/

namespace app\home\controller;

/**
 * 前台页面列表控制器
 */
class ListPage extends Common{
    //动作
    public function index(){
        $cid = Q('get.cid');
        $tid = Q('get.tid');
        //title数据
        $conf = ['title'=>'刘一宁的博客-列表页'];
        View::with('conf',$conf);

        //如果是标签走进来
        if($tid){
            //头部数据
            $HeadData = [
                'type'=>'标签',
                'name'=>Db::table('tag')->where('tid',$tid)->pluck('tname'),
                'total'=>Db::table('article_tag')
                    ->join('article','article_aid','=','aid')
                    ->where('is_recycle',1)
                    ->where('tag_tid',$tid)
                    ->count(),
            ];
            //文章数据
            //三表关联
            //文章表 分类表 文章标签表进行关联
            // 获得$tid该标签下所有的文章数据和分类数据
            $ArticleData = Db::table('article')
                        ->join('category','category_cid','=','cid')
                        ->join('article_tag','aid','=','article_aid')
                        ->where('tag_tid',$tid)
                        ->where('is_recycle',1)
                        ->orderBy('sendtime','DESC')
                        ->paginate(3);
            $page = $ArticleData->links();
            $ArticleData = $ArticleData->toArray();
            //获取该篇文章对应的所有标签
            foreach($ArticleData as $k=>$v){
                $ArticleData[$k]['tag'] = Db::table('article_tag')
                                        ->join('tag','tag_tid','=','tid')
                                        ->where('article_aid',$v['aid'])
                                        ->field(['tid','tname'])
                                        ->get();
            }
        }

        //如果是分类走进来
        if($cid){
            //实例化分类管理模型 调用getSon方法  获得自己的子集
            $CateModel = new \system\model\Category();
            $cids = $CateModel->getSon(Db::table('category')->get(),$cid);
            //把自己给压进自己子集的数组里
            //变成了自己和自己子集的cid
            $cids[] = $cid;
            //WhereIn在什么什么当中
            $HeadData = [
                'type'=>'分类',
                'name'=>Db::table('category')->where('cid',$cid)->pluck('cname'),
                'total'=>Db::table('article')
                        ->WhereIn('category_cid',$cids)
                        ->where('is_recycle',1)
                        ->count(),
            ];
            //文章数据
            //文章表和分类表进行关联
            // 找到自己和自己子集分类下面的所有文章数据和分类数据
            $ArticleData = Db::table('article')
                        ->join('category','category_cid','=','cid')
                        ->WhereIn('category_cid',$cids)
                        ->where('is_recycle',1)
                        ->paginate(6);
            $page = $ArticleData->links();
            $ArticleData = $ArticleData->toArray();
            //获取该篇文章对应的所有标签
            foreach($ArticleData as $k=>$v){
                $ArticleData[$k]['tag'] = Db::table('article_tag')
                                        ->join('tag','tag_tid','=','tid')
                                        ->where('article_aid',$v['aid'])
                                        ->field(['tid','tname'])
                                        ->get();
            }
        }

        View::with('HeadData',$HeadData);
        View::with('ArticleData',$ArticleData)->with('page',$page);
        return view();
    }
}
