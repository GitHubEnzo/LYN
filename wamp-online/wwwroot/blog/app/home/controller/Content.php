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
 * 前台页面内容控制器
 */
class Content extends Common{
    //动作
    public function index(){
    //此处书写代码...
        $aid = Q('get.aid');
        //点击次数加1
        Db::table('article')->where('aid',$aid)->increment('click',1);
        //文章所需的所有数据
        $ArticleData = Db::table('article')->join('article_data','aid','=','article_aid')->where('aid',$aid)->first();
        $ArticleData['tag'] = Db::table('article_tag')
                        ->join('tag','tag_tid','=','tid')
                        ->where('article_aid',$aid)
                        ->field(['tid','tname'])
                        ->get();
        View::with('ArticleData',$ArticleData);

        //title数据
        $conf = ['title'=>$ArticleData['title']];
        View::with('conf',$conf);
        return view();
    }
}
