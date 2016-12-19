<?php namespace app\home\controller;

class Goods extends Home{
//	载入主页面
	public function index(){
//		title数据
		$conf = ['title'=>'苏宁易购'];
		View::with('conf',$conf);
		$gid=Q('get.gid');
		$tid=Q('get.tid');
		$typeData = Db::table('type_attr')->where('class',1)->where('tid',$tid)->get();
		foreach($typeData as $k=>$v){
			$typeData[$k]['select'] = Db::table('goods_attr')
					->where('taid',$v['taid'])
					->where('gid',$gid)
					->get();
		}
		$condata=Db::table('goods')->join('detail','goods.gid','=','detail.gid')->join('type','goods.tid','=','type.tid')->where('goods.gid',$gid)->first();
		$condata['big']=explode(',',$condata['big']);
//        p($data);
//		$datagg=Db::table('goods')->join('category','goods.cid','=','category.cid')->where('pid',2)->get();
//        p($datagg);
		View::with('typeData',$typeData)->with('condata',$condata)->with('datagg',$datagg);
		//此处书写代码...

//		p($condata);

		return view();
	}
//	是否有货
	public function isgoods(){
		//获得商品表主键
		$gid = Q('post.gid');
		$spec= rtrim(Q('post.spec'),',');
		
		//获得当前商品数据
		$GoodsData = Db::table('goods_list')->where('gid',$gid)->where('combine',$spec)->first();
		if($GoodsData==[]){
			$GoodsData=0;
		}else{
			$GoodsData=$GoodsData['inventory'];
		}
		echo $GoodsData ;
		
	}
	//加入购物车
	public function addCart(){
		//获得商品表主键
		$gid = Q('post.gid');
		//获得当前商品数据
		$GoodsData = Db::table('goods')->where('gid',$gid)->first();
		//添加购物车使用 Cart::add() 方法实现，购物车中的数据会写入到 $_SESSION 超全局数组中。
		$data = [
				'uid'        => $_SESSION['home']['uid'], // 商品 ID
				'id'        => $gid, // 商品 ID
				'name'      =>  $GoodsData['gname'],// 商品名称
				'num'       => Q('post.num'), // 商品数量
				'price'     => $GoodsData['shopprice'], // 商品价格
				'options'   => Q('post.spec'),// 其他参数如价格、颜色、可以为数组或字符串
				'pic'       => $GoodsData['pic']//图片
		];
		Cart::add($data); // 添加到购物车
	}
}