<?php namespace app\home\controller;

/**
 * 前台首页控制器
 */
class Entry extends Common{
	public function index() {
		//title数据
		$conf = ['title'=>'刘一宁的博客-首页'];
		View::with('conf',$conf);

		//文章循环所需要的所有数据
		$data = Db::table('article')
				->join('category','category_cid','=','cid')
				->where('is_recycle',1)
				->orderBy('sendtime','DESC')
				->paginate(3);
		$page = $data->links();
		$data = $data->toArray();
		foreach($data as $k=>$v){
			$data[$k]['tag'] = Db::table('article_tag')
							->join('tag','tag_tid','=','tid')
							->where('article_aid',$v['aid'])
							->field(['tid','tname'])
							->get();
		}
			View::with('data',$data)->with('page',$page);


		return view();

	}
}