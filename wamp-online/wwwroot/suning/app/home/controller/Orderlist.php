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

class Orderlist extends Common {	
    public function __construct()
    {
        $_SESSION['home']['address'] ='Orderlist';
        parent::__construct();
    }
    //动作
    public function index(){
    //此处书写代码...
        $conf = ['title'=>'个人中心'];
		$data=Db::table('Orders')->where('uid',$_SESSION['home']['uid'])->orderby('oid','desc')->get();
		if($data){
			foreach($data as $k=>$v){
			$data[$k]['goods']=Db::table('Order_list')
				->where('oid',$v['oid'])
				->join('goods_list',"Order_list.glid","=","goods_list.glid")
				->join('goods',"Order_list.gid","=","goods.gid")				
				->get();
		}
	}

        View::with('conf',$conf)->with('data',$data);
        return view();
    }
	public function pay(){	
	$num=Q('post.num');	
	$data=Db::table('orders')->where('number',$num)->update(['status'=>'待发货']);
	return $data;
	}
	public function sales(){	
	$num=Q('post.num');	
	$data=Db::table('orders')->where('number',$num)->update(['status'=>'退货中']);
	return $data;
	}
}
