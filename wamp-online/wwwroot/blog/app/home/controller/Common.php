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
 * 前台公共控制器
 */
class Common{
    //构造方法
    public function __construct(){
        //共用头部分类数据
        $CateData = Db::table('category')->where('pid',0)->limit(4)->field(['cid','cname'])->get();
        View::with('CateData',$CateData);

        //右边部分的所有分类
        $CateTotalData = Db::table('category')->get();
        foreach($CateTotalData as $k=>$v){
            $CateTotalData[$k]['total'] = Db::table('article')
                ->where('category_cid',$v['cid'])
                ->where('is_recycle',1)
                ->count();
        }
        View::with('CateTotalData',$CateTotalData);

        //右边部分标签云
        $TagData = Db::table('tag')->get();
        View::with('TagData',$TagData);

        //底部网站配置数据
        $WebsetData = Db::table('webset')->lists('value');
        View::with('WebsetData',$WebsetData);

        //底部   最新文章 标签云 友情链接  作为作业。
        $linkData=Db::table('link')->get();
        View::with('linkData',$linkData);
        $newData=Db::table('article')
            ->join('category','category_cid','=','cid')
            ->where('is_recycle',1)
            ->orderBy('sendtime','DESC')->limit(3)->get();
        View::with(newData,$newData);
    }
}
