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

use hdphp\Model\Model;

class Link extends Model{
	//数据表
	protected $table = "link";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['lname','required','网站名称不能为空',self::MUST_AUTO,self::MODEL_INSERT],
		['url','required','网址不能为空',self::MUST_AUTO,self::MODEL_INSERT],
		['url','http','网址格式不正确',self::MUST_AUTO,self::MODEL_INSERT],
		['logo','required','请上传logo',self::MUST_AUTO,self::MODEL_INSERT],
		['sort','required','分类排序不能为空',self::MUST_AUTO,self::MODEL_INSERT],



	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
		['addtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;
/*
 * 添加
 */
	public function add(){
		$data=new Link();
//		p($_POST);
		$data['lname']=Q('post.lname');
		$data['url']=Q('post.url');
		$data['logo']=Q('post.logo');
		$data['sort']=Q('post.sort');
		return $data->save();

	}
/*
 * 修改
 */
	public function edit(){
		$lid=Q('get.lid');
		$data=Link::find($lid);
		$data['lname']=Q('post.lname');
		$data['url']=Q('post.url');
		$data['logo']=Q('post.logo');
		$data['sort']=Q('post.sort');
		return $data->save();
	}
}