<?php
/** .-------------------------------------------------------------------
 * |  Software: [HDCMS framework]
 * |      Site: www.hdcms.com
 * |-------------------------------------------------------------------
 * |    Author: 向军 <2300071698@qq.com>
 * |    WeChat: aihoudun
 * | Copyright (c) 2012-2019, www.houdunwang.com. All Rights Reserved.
 * '-------------------------------------------------------------------*/
namespace hdphp\route;

use hdphp\kernel\ServiceProvider;

class RouteProvider extends ServiceProvider {

	//延迟加载
	public $defer = FALSE;

	public function boot() {

	}

	public function register() {
		$this->app->single( 'Route', function ( $app ) {
			return new Route( $app );
		}, TRUE );
	}
}