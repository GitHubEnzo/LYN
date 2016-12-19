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

class Shops extends Common{
    //动作
     private $db;
    public function __construct()
    {
        parent::__construct();
        $this->db=new \system\model\orders();
    }
    public function index(){
    //此处书写代码...
        $data = Db::table('orders')->orderBy('oid','DESC')->paginate(6);
        $page = $data->links();
        View::with('data',$data)->with('page',$page);
        return view();
    }   
//	状态修改 
	public function chenged(){
		$oid=Q('post.oid');
		$status=Q('post.status');			
		echo json_encode($this->db->where('oid',$oid)->update(['status'=>$status]));
	}
}
