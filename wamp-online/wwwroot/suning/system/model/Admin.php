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

class Admin extends Model{
	//数据表
	protected $table = "admin";

	//允许填充字段
	protected $allowFill = [ ];

	//禁止填充字段
	protected $denyFill = [ ];

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

	public function login(){
		Validate::make( [
			[ 'adminname', 'required', '用户名不能为空', 3 ],
			[ 'adminpwd', 'required', '请输入帐号密码', 3 ],
			['code','required','验证码不能为空',3],
			['code','captcha','验证码错误',3],
		]);
		$db = Db::table('admin')->where('adminname',$_POST['adminname'])->first();
		//判断用户名是否正确
		if($_POST['adminname'] != $db['adminname'])
		{
			$this->error = "用户名错误";return false;
		}
		//判断密码是否正确
		if(Crypt::encrypt($_POST['adminpwd']) != $db['adminpwd'])
		{
			$this->error = "密码错误";return false;
		}
//		//用户名密码都正确
//		获取本地IP
		$IP=Request::ip();
		$_SESSION['aid'] = $db['aid'];
		$_SESSION['admin']['adminname'] = $db['adminname'];
//		修改登录时间及本地IP
		Db::table('admin')->where('adminname',$_POST['adminname'])->update(['logintime'=>time(),'loginip'=>$IP]);
		return true;
	}
//	修改密码
	public function changePass()
	{
		Validate::make( [
			[ 'oldpwd', 'required', '原始密码不能为空', 3 ],
			[ 'newpwd', 'required', '修改密码不能为空', 3 ],
			['confirm','required','确认密码不能为空',3],
		]);
		$db = Db::table('admin')->where('aid', $_SESSION['admin']['aid'])->first();
		if ($db['adminpwd'] != Crypt::encrypt($_POST['oldpwd'])) {
			$this->error = '原始密码错误，请重新输入';
			return false;
		}
		if ($db['adminpwd'] != Crypt::encrypt($_POST['newpwd'])) {
			$this->error = '修改密码与原始密码一致，请重新输入';
			return false;
		}
		if ($db['confirm'] != $_POST['newpwd']) {
			$this->error = '两次密码输入不一致，请重新输入';
			return false;
		}
		$db=$this-where('aid', $_SESSION['aid'])->update(['adminpwd'=>Crypt::encrypt($_POST['newpwd'])]);
		if(!$db){
			$this->error = '操作失败，请稍后再试';return false;
		}
		return true;
	}
}