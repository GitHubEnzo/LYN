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
		['cname','required','类型不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
		['sort','required','排序不能为空',self::MUST_VALIDATE,self::MODEL_BOTH],
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
		$category=new category();
		$category['cname']=Q('post.cname');
		$category['pid']=Q('post.pid');
		$category['sort']=Q('post.sort');
		$category['tid']=Q('post.tid');
		return $category->save();
	}
//	编辑
	public function edit(){
		Validate::make( [
			[ 'newcname', 'required', '类型名称不能为空', 3 ],
			[ 'newsort', 'required', '排序不能为空', 3 ],
		]);
		$category=new category();
		$category->where('cid',Q('get.cid'))->update(['cname'=>Q('post.newcname'),'pid'=>Q('post.pid'),'tid'=>Q('post.tid'),'sort'=>Q('post.newsort')]);
		return true;
	}
	public function getCateData($cid){
		$data=Db::table('category')->get();
		$cids=$this->getson($data,$cid);
		$cids[]=$cid;
		$data = Db::table('category')->WhereNotIn('cid',$cids)->get();
		//树状结构
		$data = Data::tree($data,'cname');
		return $data;
	}
	public function getson($data,$cid){
		static $temp=[];
		foreach($data  as $k=>$v){
			if($v['pid']==$cid){
				$temp[]=$v['cid'];
				$this->getSon($data,$v['cid']);
			}
		}
		return $temp;
	}
}