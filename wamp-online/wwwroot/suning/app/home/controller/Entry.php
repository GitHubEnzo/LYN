<?php namespace app\home\controller;

use think\Db;

class Entry extends Home{
//	楼层数字
	private $num=1;
//	载入主页面
	public function index() {
//		title数据
		$conf = ['title'=>'苏宁易购'];
		View::with('conf',$conf);
//		二三级菜单
		$cateData=Db::table('category')->where('pid',0)->orderby('cid','ASC')->get();
		foreach($cateData as $k=>$v){
			$cateData[$k]['num']=$this->num++;
			$cateData[$k]['cname2']=Db::table('category')->where('pid',$v['cid'])->get(['cname','cid']);
//			楼层图标导航随机
			$num1=rand(1,4);
			$cateData[$k]['cname1']=Db::table('category')->where('pid',0)->orderby('cid','ASC')->limit($num1,6)->get(['cname']);
			if($cateData[$k]['cname2']){
				foreach($cateData[$k]['cname2'] as $kk=>$vv){
					$cateData[$k]['cname2'][$kk]['cname3']=Db::table('category')->where('pid',$vv['cid'])->get(['cname','cid']);
					if($cateData[$k]['cname2'][$kk]['cname3']){
						foreach($cateData[$k]['cname2'][$kk]['cname3'] as $kkk=>$vvv) {
							$cid = $vvv['cid'];
							$cateData[$k]['goodData'][]=Db::table('goods')->where('cid',$cid)->first();
						}
					}
				}
			}
//			楼层内部数据
			if($cateData[$k]['goodData']){
				$cateData[$k]['goodData']=array_slice($cateData[$k]['goodData'],0,9);
//				p($cateData[$k]['goodData']);
			}			
		}
		$brand=Db::table('brand')->limit(0,14)->get(['logo']);
		View::with('cateData',$cateData)->with('brand',$brand);
		
		return view();
	}
	//    退出
	public function out(){
		session_destroy();
		session_unset();
		message('退出成功',"login.index","success");
	}
}