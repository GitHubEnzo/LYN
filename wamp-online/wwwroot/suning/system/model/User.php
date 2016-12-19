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

class User extends Model{
	//数据表
	protected $table = "user";

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
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;
//	注册
	public function reg(){
		$db = Db::table('user')->where('account',$_POST['account'])->first();
		if($db){
			$this->error = "用户名已经存在";return false;
		}
		if(Q('post.password')!=Q('post.affirm')){
			$this->error = "两次密码不一致";return false;
		}
		$data=new user() ;
		$data['account']=$_POST['account'];
		$data['password']=Crypt::encrypt($_POST['password']);
		return $data->save();
	}
//	登陆
	public function login(){
		Validate::make( [
			[ 'account', 'required', '用户名不能为空', 3 ],
			[ 'password', 'required', '请输入帐号密码', 3 ],
			['code','required','验证码不能为空',3],
			['code','captcha','验证码错误',3],
		]);
		$db = Db::table('user')->where('account',$_POST['account'])->first();
		//判断用户名是否正确
		if($_POST['account'] != $db['account'])
		{
			$this->error = "用户名错误";return false;
		}
		//判断密码是否正确
		if(Crypt::encrypt($_POST['password']) != $db['password'])
		{
			$this->error = "密码错误";return false;
		}
//		//用户名密码都正确
		$_SESSION['home']['uid'] = $db['uid'];
		$_SESSION['home']['account'] = $db['account'];
		return true;
	}
}