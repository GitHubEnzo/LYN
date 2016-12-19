<?php namespace app\home\controller;

class Lists extends Home{
//	载入主页面
	public function index(){
    //此处书写代码...
        $cid = Q('get.cid');
        //处理面包屑  获得自己和父级的数据
        $fatherData = $this->getFather(Db::table('category')->get(),$cid);
        //反转数据
        $fatherData = array_reverse($fatherData);
        View::with('fatherData',$fatherData);
//		品牌
		$brand=Db::table('brand')->limit(0,14)->get(['logo']);
        View::with('brand',$brand);
//		热门推荐
		$hot=Db::table('goods')->limit(0,5)->get();
        View::with('hot',$hot);
        //获得自己和自己子集的cid
        $cids = $this->getSon($cid);
        //p($cids);
        //获得商品表的gid
        $gids = Db::table('goods')->whereIn('cid',$cids)->lists('gid');
        if($gids){
            //根据商品表主键获得这些商品的商品属性数据
            $goodsAttr = Db::table('goods_attr')
                        ->whereIn('gid',$gids)
                        ->groupBy('gtvalue')
                        ->get();
            //p($goodsAttr);

            //重组数组
            //把所有类型属性id相同的放在一起
            $tempAttr = [];
            foreach($goodsAttr as $k=>$v){
                $tempAttr[$v['taid']][] = $v;
            }
            //p($tempAttr);

            //继续重组数组
            $finalTempAttr = [];
            foreach($tempAttr as $k=>$v){
                $finalTempAttr[] = [
                    'name' => Db::table('type_attr')->where('taid',$k)->pluck('taname'),
                    'value'=>$v
                ];
            }
            View::with('finalTempAttr',$finalTempAttr);

            /**
             * 筛选
             */
            //array_fill()填充
            //第一个参数，数组下标开始的值，
            //第二个参数 总数
            //第三个参数 要填充的值
            $param = isset($_GET['param']) ? explode('_',$_GET['param']) : array_fill(0,count($finalTempAttr),0);
            View::with('param',$param);
            $filterGids = [];
            foreach($param as $k=>$v){
                if($v){//进行筛选
                    //获得gtid对应那条的gtvalue值
                    $gtvalue = Db::table('goods_attr')
                                ->where('gtid',$v)
                                ->pluck('gtvalue');
                    //通过gtvalue值获得该值下所有的商品
                    $filterGids[] = Db::table('goods_attr')
                                ->where('gtvalue',$gtvalue)
                                ->lists('gid');
                }
            }
            //p($filterGids);
            if($filterGids){
                $finalGids = $filterGids[0];
                //p($finalGids);

                foreach($filterGids as $k=>$v){
                    //取交集
                    $finalGids = array_intersect($finalGids,$v);
                }
               //再次取交集，存在一种可能性，该商品可能不属于该分类下
                $finalGids = array_intersect($finalGids,$gids);
            }else{
                //如果不存在筛选，就获取所有的gid
                $finalGids = $gids;
            }
        }else{
            $finalGids = [];
        }
        //获取商品数据
        if($finalGids){
            $goodsData = Db::table('goods')->whereIn('gid',$finalGids)->get();
        }else{
            $goodsData = [];
        }
        View::with('goodsData',$goodsData);

        return view();
    }

    //获得父级
    public function getFather($data,$cid){
       static $temp = [];
        foreach($data as $k=>$v){
            if($cid == $v['cid']){
                $temp[] = $v;
                $this->getFather($data,$v['pid']);
            }
        }
        return $temp;
    }

    //获得自己和自己子集的cid
    public function getSon($cid){
        $cids = $this->getSonCid(Db::table('category')->get(),$cid);
        $cids[] = $cid;
        return $cids;
    }

    //递归找子集
    public function getSonCid($data,$cid){
        static $temp = [];
        foreach($data as $k=>$v){
            if($cid == $v['pid']){
                $temp[] = $v['cid'];
                $this->getSonCid($data,$v['cid']);
            }
        }
        return $temp;
    }
}