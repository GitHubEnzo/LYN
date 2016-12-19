<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |-------------------------------------------------------------------
 * |    Author: 熊伟洋<434493420@qq.com>
 * |    WeChat: hello_McGrady
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/

namespace system\model;
//用户管理模型
use hdphp\Model\Model;

/**
 * 用户管理模型
 */
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

	//登录
	public function login()
	{
		Validate::make([
			['username','required','请输入用户名',3],
			['password','required','请输入密码',3],
			['code','required','验证码不能为空',3],
			['code','captcha','验证码错误',3],
		]);
		//判断验证码是否正确
		if(strtoupper($_SESSION['code']) != strtoupper($_POST['code']))
		{
			$this->error = "验证码错误";return false;
		}
		$data = Db::table('user')->where('username',$_POST['username'])->first();
		//判断用户名是否正确
		if($_POST['username'] != $data['username'])
		{
			$this->error = "用户名错误";return false;
		}
		//判断密码是否正确
		if(Crypt::encrypt($_POST['password']) != $data['password'])
		{
			$this->error = "密码错误";return false;
		}
		//走到这说明用户名密码都正确
		$_SESSION['admin']['uid'] = $data['uid'];
		$_SESSION['admin']['username'] = $data['username'];
		return true;
	}

	//修改密码
	public function changePass()
	{
		Validate::make( [
				['password','required','原始密码不能为空',3],
				['new_password','required','新密码不能为空',3],
				['confirm_password','required','确认密码不能为空',3],
		] );
		$data = Db::table('user')->where('uid',$_SESSION['admin']['uid'])->first();
		//原始密码比对数据库
		if($data['password'] != Crypt::encrypt($_POST['password']))
		{
			$this->error = '原始密码不正确';return false;
		}
		//新密码与原始密码比对
		if($data['password'] == Crypt::encrypt($_POST['new_password']))
		{
			$this->error = '新密码与原始密码不能一致';return false;
		}
		//新密码与确认密码比对
		if($_POST['new_password'] != $_POST['confirm_password']){
			$this->error = '新密码与确认密码不一致，请重新输入';return false;
		}
		$data = $this->where('uid',$_SESSION['admin']['uid'])->update(['password'=>Crypt::encrypt($_POST['new_password'])]);
		if(!$data){
			$this->error = '操作失败，请稍后再试';return false;
		}
		return true;
	}
}