<?php
/** .-------------------------------------------------------------------
* |  Software: [HDCMS framework]
* |      Site: www.hdcms.com
* |-------------------------------------------------------------------
* |    Author: 向军 <2300071698@qq.com>
* |    WeChat: aihoudun
* | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
* '-------------------------------------------------------------------*/

namespace app\home\controller;

class InCart {
    public function __construct(){
//        登陆后跳回
        $_SESSION['home']['address'] ='incart';
    }
    //动作
    public function index(){
    //此处书写代码...
    	$conf = ['title'=>'购物车'];
		View::with('conf',$conf);
        return view();
    }
    //增加数量
    public function addNum(){
        //畸形键名
        $kk = Q('post.kk');
        //数量
        $num = $_SESSION['cart']['goods'][$kk]['num'];
        //数量+1
        $num = $num+1;
        //更新购物车
        $data=[
            'sid'=>$kk,// 唯一 sid，添加购物车时自动生成
            'num'=>$num
        ];
        Cart::update($data);

        //返回给异步
        $getData=[
            'num'=>$num,
            'sid'=>$kk,// 唯一 sid，添加购物车时自动生成
            'price'=>$_SESSION['cart']['goods'][$kk]['total'],//小计
            'total'=>Cart::getTotalPrice()//总价
        ];
        echo json_encode($getData);
    }
//减少数量
    public function minNum(){
        //畸形键名
        $kk = Q('post.kk');
        //数量
        $num = $_SESSION['cart']['goods'][$kk]['num'];
        //数量-1
        $num = $num-1;
        if($num<=1){
            $num=1;
        }
        //更新购物车
        $data=[
            'sid'=>$kk,// 唯一 sid，添加购物车时自动生成
            'num'=>$num
        ];
        Cart::update($data);

        //返回给异步
        $getData=[
            'num'=>$num,
            'sid'=>$kk,// 唯一 sid，添加购物车时自动生成
            'price'=>$_SESSION['cart']['goods'][$kk]['total'],//小计
            'total'=>Cart::getTotalPrice()//总价
        ];
        echo json_encode($getData);
    }
    //删除
    public function del(){
        //获得那一条的数量和价格
        $kk = Q('post.kk');
        $oldNum = $_SESSION['cart']['goods'][$kk]['num'];
        $oldTotal = $_SESSION['cart']['goods'][$kk]['total'];

        //总数量和价格
        $allNum = $_SESSION['cart']['total_rows'];
        $allTotal = $_SESSION['cart']['total'];

        //相减
        $newNum = $allNum-$oldNum;
        $newTotal = $allTotal-$oldTotal;

        //删除
        unset($_SESSION['cart']['goods'][$kk]);

        $_SESSION['cart']['total_rows'] = $newNum;
        $_SESSION['cart']['total'] = $newTotal;
        $data = [
            'newTotal'=>$newTotal
        ];
        echo json_encode($data);

    }
}
