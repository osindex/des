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
		$this->app->singleton('des', function () {
			$key = env('DES_KEY', null);
			return new Des($key);
		});
		$this->app->singleton('des3', function () {
			$key = env('DES_KEY', null);
			$iv = env('DES_IV', null);
			return new Des3($key, $iv);
		});
	}
	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return ['des', 'des3'];
	}
}
