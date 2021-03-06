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

class Goodslist extends Model{
	//数据表
	protected $table = "goods_list";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
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
	public function add(){
		$gldata=new Goodslist();
		$gldata['combine']=implode(',',Q('post.combine')) ;
		$gldata['number']=Q('post.number');
		$gldata['inventory']=Q('post.inventory');
		$gldata['gid']=Q('get.gid');
		return $gldata->save();
	}
	//编辑
	public function edit(){
		$gldata=Goodslist::find(q('get.glid'));
		$gldata['number']=Q('post.number');
		$gldata['inventory']=Q('post.inventory');
		return $gldata->save();
	}
}