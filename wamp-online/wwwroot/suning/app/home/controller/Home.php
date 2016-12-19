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

class Home {
	    public function __construct(){
//	    	顶级菜单导航条数据
            $catedata=Db::table('category')->where('pid',0)->limit(9)->get();
//         	搜索条热词数据
		    $homegoodsData=Db::table('goods')->limit(5)->get();
            View::with('catedata1',$catedata)->with('homegoodsData',$homegoodsData);
			
    }
}
