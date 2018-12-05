<?php
namespace Osi\Des\Facades;

use Illuminate\Support\Facades\Facade;

class Des3Facade extends Facade {
	protected static function getFacadeAccessor() {
		return 'des3';
	}
}