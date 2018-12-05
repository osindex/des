<?php

namespace Osi\Des;

use Illuminate\Support\ServiceProvider;

class DesServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register services.
	 *
	 * @return void
	 */
	public function register() {
		// 在容器中注册
		$this->app->singleton('Des', function () {
			$res = env('DES_RES', 'base64');
			$mode = env('DES_MODE', 'des-ecb');
			$key = env('DES_KEY', null);
			// $iv = env('DES_IV', null); ecb不需要
			return new Des($mode, $res, $key);
		});
		$this->app->singleton('Des3', function () {
			$res = env('DES_RES', 'base64');
			$mode = env('DES3_MODE', 'des-ede3-cbc');
			$key = env('DES_KEY', null);
			$iv = env('DES_IV', null);
			return new Des3($mode, $res, $key, $iv);
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return ['Des', 'Des3'];
	}
}
