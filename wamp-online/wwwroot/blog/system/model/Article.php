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
 * 文章管理模型
 */
class Article extends Model{
	//数据表
	protected $table = "article";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
		['title','required','请填写标题',self::MUST_VALIDATE,self::MODEL_BOTH],
			['author','required','请填写文章作者',self::MUST_VALIDATE,self::MODEL_BOTH],
			['thumb','required','请上传缩略图',self::MUST_VALIDATE,self::MODEL_BOTH],
			['digest','required','请填写摘要',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
		['sendtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
		['updatetime','time','function',self::MUST_AUTO,self::MODEL_UPDATE],
		['user_uid','userUid','method',self::MUST_AUTO,self::MODEL_INSERT],
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;

	//自动完成时user_uid获取
	public function userUid(){
		return $_SESSION['admin']['uid'];
	}

	//添加
	public function store(){
		$tagData = Q('post.tag_tid');
		//p($tagData);die;
		//文章标签表的验证
		if(!isset($tagData)){
			$this->error = '请选择标签';return false;
		}
		//1.添加文章表
		$Article = new article();
		$Article['title'] = Q('post.title');
		$Article['author'] = Q('post.author');
		$Article['category_cid'] = Q('post.category_cid');
		$Article['thumb'] = Q('post.thumb');
		$Article['digest'] = Q('post.digest');
		$aid = $Article->save();
		//2.添加文章数据表
		$ArticleData = new \system\model\Article_data();
		$ArticleData['keywords'] = Q('post.keywords');
		$ArticleData['des'] = Q('post.des');
		$ArticleData['content'] = Q('post.content');
		$ArticleData['article_aid'] = $aid;
		$ArticleData->save();
		$ArticleTag = new \system\model\Article_tag();
		//添加文章标签表
		foreach( $tagData as $k=>$v){
			$ArticleTag['article_aid'] = $aid;
			$ArticleTag['tag_tid'] = $v;
			$ArticleTag->save();
		}
		return true;
	}

	//编辑
	public function edit(){
		$tagData = Q('post.tag_tid');
		if(!isset($tagData)){
			$this->error = '请选择标签';return false;
		}
		//文章表的编辑
		$aid = Q('get.aid');
		$Article = Article::find($aid);
		$Article['title'] = Q('post.title');
		$Article['author'] = Q('post.author');
		$Article['category_cid'] = Q('post.category_cid');
		$Article['thumb'] = Q('post.thumb');
		$Article['digest'] = Q('post.digest');
		$Article->save();
		//文章数据表的编辑
		$ArticleData = new \system\model\Article_data();
		$data = [
			'keywords'=>Q('post.keywords'),
			'des'=>Q('post.des'),
			'content'=>Q('post.content')
		];
		$ArticleData->where('article_aid',$aid)->update($data);
		$ArticleTag = new \system\model\Article_tag();
		$ArticleTag->where('article_aid',$aid)->delete();
		foreach($tagData  as $v){
			$ArticleTag['article_aid']=$aid;
			$ArticleTag['tag_tid']=$v;
			$ArticleTag->save();
		}
		return true;







	}
}