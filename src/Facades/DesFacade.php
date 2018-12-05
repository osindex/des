<?php
namespace Osi\Des\Facades;

use Illuminate\Support\Facades\Facade;

class DesFacade extends Facade {
	protected static function getFacadeAccessor() {
		return 'des';
	}
}