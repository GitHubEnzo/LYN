<?php
/** .-------------------------------------------------------------------
* |  Software: [HDPHP framework]
* |      Site: www.hdphp.com
* |-------------------------------------------------------------------
* |    Author: 向军 <2300071698@qq.com>
* |    WeChat: aihoudun
* | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
* '-------------------------------------------------------------------*/

namespace system\model;

use hdphp\model\Model;
class Orders extends Model{
	//数据表
	protected $table = "orders";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
//		['tname','required','请填写类型',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];
	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;
//	添加
	public function sav(){
		$adData=Db::table('address')->where('adid',Q('adid'))->first();
		$orders=new Orders();
		$orders['number']=Cart::getOrderId();
		$orders['consignee']=$adData['name'];
		$orders['address']=$adData['sheng'].$adData['shi'].$adData['xianqu'].$adData['address'];
		$orders['mobile']=$adData['phone'];
		$orders['total']=$_SESSION['cart']['total'];
		$orders['time']=time();
		$orders['uid']=$_SESSION['home']['uid'];		
		$oid= $orders->save();
		$olData=new \system\model\Orderlist();
		foreach($_SESSION['cart']['goods'] as $k=>$v ){
			$options= rtrim($v['options'],',');
			$glData=Db::table('goods_list')->where('gid',$v['id'])->where('combine',$options)->get();			
			$olData['quantity']=$v['num'];
			$olData['subtotal']=$v['total'];
			$olData['gid']=$v['id'];
			$olData['oid']=$oid;
			foreach($glData as $k=>$v ){
				$olData['glid']=$v['glid'];
				$olData['glnumber']=$v['number'];
				$olData->save();
			}											
		}					
		return $oid;		
	}

}