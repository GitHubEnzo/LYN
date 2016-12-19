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

class Goods extends Model{
	//数据表
	protected $table = "goods";

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
		['time','time','function',self::MUST_AUTO,self::MODEL_INSERT]
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;

	//添加
	public function add(){
		//1.商品表的添加
		$Goods = new Goods();
		$Goods['gname'] = Q('post.gname');
		$Goods['gnumber'] = Q('post.gnumber');
		$Goods['unit'] = Q('post.unit');
		$Goods['marketprice'] = Q('post.marketprice');
		$Goods['shopprice'] = Q('post.shopprice');
		$Goods['pic'] = Q('post.pic');
		$Goods['click'] = Q('post.click');
		$Goods['total'] = Q('post.total');
		$Goods['aid'] = $_SESSION['aid'];
		$Goods['bid'] = Q('post.bid');
		$Goods['cid'] = Q('post.cid');
		$Goods['tid'] = Q('post.tid');
		$gid = $Goods->save();
		//2.商品详情表的添加
		$logo = Q('post.logo');
		//处理缩略图
		$small = '';$medium = '';$big = '';
		foreach($logo as $k=>$v){
			$small .= Image::thumb($v, dirname($v) . '/small_' . basename($v), 50, 50, 5) . ',';
			$medium .= Image::thumb($v, dirname($v) . '/medium_' . basename($v), 200, 200, 5) . ',';
			$big .= Image::thumb($v, dirname($v) . '/big_' . basename($v), 800, 800, 5) . ',';
		}
		//去字符串最后的逗号
		$small = rtrim($small,',');
		$medium = rtrim($medium,',');
		$big = rtrim($big,',');
		//执行添加
		$detail = new \system\model\Detail();
		$detail['small'] = $small;
		$detail['medium'] = $medium;
		$detail['big'] = $big;
		$detail['intro'] = Q('post.intro');
		$detail['service'] = Q('post.service');
		$detail['gid'] = $gid;
		$detail->save();
		//3.商品属性表的添加
		$goodsAttr = new \system\model\GoodsAttr();
		//商品属性
		$attr = Q('post.attr');
		foreach($attr as $k=>$v){
			if($v){
				$goodsAttr['gtvalue'] = $v;
				$goodsAttr['added'] = 0;
				$goodsAttr['taid'] = $k;
				$goodsAttr['gid'] = $gid;
				$goodsAttr->save();
			}
		}
		//商品规格
		$spec = Q('post.spec');
		foreach($spec as $k=>$v){
			foreach($v['color'] as $kk=>$vv){
				$goodsAttr['gtvalue'] = $vv;
				$goodsAttr['added'] = $v['added'][$kk];
				$goodsAttr['taid'] = $k;
				$goodsAttr['gid'] = $gid;
				$goodsAttr->save();
			}
		}
		return true;
	}

	//编辑
	public function edit(){
		$gid = Q('get.gid');
		//1.编辑商品表
		$Goods = Goods::find($gid);
		$Goods['gname'] = Q('post.gname');
		$Goods['gnumber'] = Q('post.gnumber');
		$Goods['unit'] = Q('post.unit');
		$Goods['marketprice'] = Q('post.marketprice');
		$Goods['shopprice'] = Q('post.shopprice');
		$Goods['pic'] = Q('post.pic');
		$Goods['click'] = Q('post.click');
		$Goods['total'] = Q('post.total');
		$Goods['aid'] = 1;
		$Goods['bid'] = Q('post.bid');
		$Goods['cid'] = Q('post.cid');
		$Goods['tid'] = Q('post.tid');
		$Goods->save();
		//2.商品属性表的编辑
		$goodsAttr = new \system\model\GoodsAttr();
		//先删后添
		$goodsAttr->where('gid',$gid)->delete();
		//商品属性
		$attr = Q('post.attr');
		foreach($attr as $k=>$v){
			if($v){
				$goodsAttr['gtvalue'] = $v;
				$goodsAttr['added'] = 0;
				$goodsAttr['taid'] = $k;
				$goodsAttr['gid'] = $gid;
				$goodsAttr->save();
			}
		}
		//商品规格
		$spec = Q('post.spec');
		foreach($spec as $k=>$v){
			foreach($v['color'] as $kk=>$vv){
				$goodsAttr['gtvalue'] = $vv;
				$goodsAttr['added'] = $v['added'][$kk];
				$goodsAttr['taid'] = $k;
				$goodsAttr['gid'] = $gid;
				$goodsAttr->save();
			}
		}
		//商品详情
		//3.商品详情表的编辑
		$logo = Q('post.logo');
//		p(substr(basename("attachment/2016/11/09/medium_16981478669866.jpg"),0,6));die;
		foreach($logo as $k=>$v){
			//当旧图片还是旧数据的时候
			if(substr(basename($v),0,6)=='big'){
				$logo[$k] = dirname($v) . '/' . ltrim(basename($v),'big_');
			}
		}
		//操作缩略图
		$small = "";$medium="";$big="";
		foreach($logo as $k=>$v){
			$small .= Image::thumb($v, dirname($v) . '/small_' . basename($v) , 50, 50, 5) . ',';
			$medium .= Image::thumb($v, dirname($v) . '/medium_' . basename($v) , 200, 200, 5) . ',';
			$big .= Image::thumb($v, dirname($v) . '/big_' . basename($v) , 800, 800, 5) . ',';
		}
		$small = rtrim($small,',');
		$medium = rtrim($medium,',');
		$big = rtrim($big,',');
		$data = [
			'small'=>$small,
			'medium'=>$medium,
			'big'=>$big,
			'intro'=>Q('post.intro'),
			'service'=>Q('post.service')
		];
		$detail = new \system\model\Detail();
		$detail->where('gid',$gid)->update($data);
		return true;
	}
}