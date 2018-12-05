<?php

if (!function_exists('emptyFuc')) {
	function emptyFuc($value = '') {
		return $value;
	}
}

if (!function_exists('encryptFunc')) {
	function encryptFunc($value = '') {
		switch ($value) {
		case 'base64':
			$method = 'base64_encode';
			break;
		case 'hex':
			$method = 'bin2hex';
			break;
		default:
			$method = 'emptyFuc';
			break;
		}
		return $method;
	}
}

if (!function_exists('decryptFunc')) {
	function decryptFunc($value = '') {
		switch ($value) {
		case 'base64':
			$method = 'base64_decode';
			break;
		case 'hex':
			$method = 'hex2bin';
			break;
		default:
			$method = 'emptyFuc';
			break;
		}
		return $method;
	}
}