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
 * 分类管理模型
 */
class Category extends Model{
	//数据表
	protected $table = "category";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['cname','required','分类不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['ctitle','required','标题不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['cdes','required','分类描述不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['ckeywords','required','分类关键字不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['csort','num:1,99','排序不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
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
	public function store()
	{
		$Category = new Category();
		$Category['cname'] = $_POST['cname'];
		$Category['pid'] = $_POST['pid'];
		$Category['ctitle'] = $_POST['ctitle'];
		$Category['cdes'] = $_POST['cdes'];
		$Category['ckeywords'] = $_POST['ckeywords'];
		$Category['csort'] = $_POST['csort'];
		return $Category->save();
	}

	//获得所属分类
	public function getCateData($cid)
	{
		//首先获得自己的子集
		$cids = $this->getSon(Db::table('category')->get(),$cid);
		//把自己压进$cids里
		$cids[] = $cid;
		//排除自己和自己子集的所有数据
		$data = Db::table('category')->WhereNotIn('cid',$cids)->get();
		//树状结构
		$data = Data::tree($data,'cname');
		return $data;
	}

	//获得所有子集（递归找子集）
	public function getSon($data,$cid)
	{
		static $temp = [];
		foreach($data as $k=>$v){
			if($v['pid'] == $cid)
			{//说明他是他的子集
				$temp[] = $v['cid'];
				//递归找子集
				$this->getSon($data,$v['cid']);
			}
		}
		return $temp;
	}

	//编辑
	public function edit()
	{
		$cid = q('cid');
		$Category = Category::find($cid);
		$Category['cname'] = $_POST['cname'];
		$Category['pid'] = $_POST['pid'];
		$Category['ctitle'] = $_POST['ctitle'];
		$Category['cdes'] = $_POST['cdes'];
		$Category['ckeywords'] = $_POST['ckeywords'];
		$Category['csort'] = $_POST['csort'];
		//记住加上隐藏域
		return $Category->save();
	}
}