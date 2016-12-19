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

class Typeattr extends Model{
	//数据表
	protected $table = "type_attr";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['taname','required','请填写属性名',self::MUST_VALIDATE,self::MODEL_BOTH],
		['tavalue','required','请填写属性值',self::MUST_VALIDATE,self::MODEL_BOTH],
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
	public function add(){
		$typeAttr=new TypeAttr();
		$typeAttr['taname']=Q('post.taname');
		$typeAttr['tavalue']=Q('post.tavalue');
		$typeAttr['class']=Q('post.class');
		$typeAttr['tid']=Q('get.tid');
		return $typeAttr->save();
	}
	//编辑
	public function edit(){
		Validate::make( [
			[ 'newname', 'required', '属性名称不能为空', 3 ],
			[ 'newvalue', 'required', '属性值不能为空', 3 ],
		]);
		$taid=Q('get.taid');
		$typeAttr=typeattr::find($taid);
		$typeAttr->where('taid',$taid)->update(['taname'=>Q('post.newname'),'tavalue'=>Q('post.newvalue'),'class'=>Q('post.newclass')]);
		return true;
	}
}