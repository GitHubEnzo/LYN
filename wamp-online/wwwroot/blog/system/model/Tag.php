<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |-------------------------------------------------------------------
 * |    Author: 熊伟洋<434493420@qq.com>
 * |    WeChat: hello_McGrady
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace system\model;

use hdphp\Model\Model;

/**
 * 标签管理模型
 */
class Tag extends Model{
	//数据表
	protected $table = "tag";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['tname','required','标签不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['tname','unique','标签已存在',self::MUST_VALIDATE,self::MODEL_BOTH],
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

	//添加
	public function store(){
		//转为数组
		$tname = explode('|',$_POST['tname']);
		$Tag = new tag();
		//循环添加
		foreach($tname as $k=>$v){
			//如果该标签已存在 先删后添
			if(Db::table('tag')->where('tname',$v)->first()){
				continue;
			}
			$Tag['tname'] = $v;
			$Tag->save();
		}
		return true;
	}

	//编辑
	public function edit(){
		$tid = Q('get.tid');
		$Tag = Tag::find($tid);
		$Tag['tname'] = Q('post.tname');
		return $Tag->save();
	}
}