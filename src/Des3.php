<?php
namespace Osi\Des;

/**
 * Class Des3
 * @package des3
 */
class Des3 {
	/**
	 * @var string
	 */
	var $mode = '';
	/**
	 * @var string
	 */
	var $res = '';

	/**
	 * @var string
	 */
	var $key = '';

	/**
	 * @var string
	 */
	var $iv = '';

	/**
	 * Des3 constructor.
	 * @param string|null $key
	 * @param string|null $iv
	 */
	public function __construct(string $mode, string $res, string $key = null, string $iv = null) {
		if (strlen($key) != 32) {
			throw new \Exception("DES3_KEY长度错误，长度为32");
		}
		if (strlen($iv) != 8) {
			throw new \Exception("DES3_IV长度错误，长度为8");
		}
		$this->mode = $mode;
		$this->res = $res;
		$this->key = $key;
		$this->iv = $iv;
	}

	public function encrypt($data) {
		return call_user_func(encryptFunc($this->res), openssl_encrypt($data, $this->mode, $this->key, OPENSSL_RAW_DATA, $this->iv));
	}

	public function decrypt($data) {
		return openssl_decrypt(call_user_func(decryptFunc($this->res), $data), $this->mode, $this->key, OPENSSL_RAW_DATA, $this->iv);
	}

}
