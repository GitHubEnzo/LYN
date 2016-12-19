<?php namespace app\home\controller;

use think\Db;

class Search extends Home{

    public function __construct()
    {
        parent::__construct();
    }
	public function index(){
		if(IS_POST){
			$search_key=Q('post.search_key');
			$search_key=trim($search_key);
			$Data=Db::query("select * from goods where gname like ?",['%'.$search_key.'%']);
			View::with('Data',$Data);
		}
		return view();
	}
}