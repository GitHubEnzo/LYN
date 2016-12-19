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

class Order extends Common {
	   private $db;
    public function __construct()
    {
        $_SESSION['home']['address'] ='Order';
        parent::__construct();
		$this->db=new \system\model\Orders();
    }
    //动作
    public function index(){
    	$data=Db::table('address')->where('uid',$_SESSION['home']['uid'])->get();
    //此处书写代码...
        $conf = ['title'=>'提交订单'];				 	
        View::with('conf',$conf)->with('data',$data);
        return view();
    }
	//添加地址
	public function add(){
		$address=new \system\model\Address();
	        if(IS_POST) {
            if($address->add()){
                message('添加成功','order.index','success');
            }
            message($this->db->getError(),'back','error');
        }
	}
	//存地址adid
	public function save(){
	    if(IS_POST) {
	    	$oid=$this->db->sav();	        					
            if($oid){
            	unset($_SESSION['cart']);
               return $oid;
            }			
            message($this->db->getError(),'back','error');
			
        }
	}
}
