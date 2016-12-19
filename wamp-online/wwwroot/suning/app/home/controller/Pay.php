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

class Pay extends Common {
    //动作
         private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db=new \system\model\Orders();
    }
    public function index(){
    	
		$oid=Q('get.oid');
		$data=Db::table('orders')->where('oid',$oid)->first();
    //此处书写代码...
       $conf = ['title'=>'我的易购'];		
        View::with('conf',$conf)->with('data',$data);
        return view();
    }
	public function pay(){
	   	$num=Q('post.num');	
	$data=Db::table('orders')->where('number',$num)->update(['status'=>'待发货']);
	return $data;
	}
}