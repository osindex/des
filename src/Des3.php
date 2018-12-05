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
	public function __construct(string $key = null, string $iv = null) {
		if (strlen($key) != 24) {
			throw new \Exception("DES3_KEY长度错误，长度为24");
		}
		if (strlen($iv) != 8) {
			throw new \Exception("DES3_IV长度错误，长度为8");
		}
		$this->key = $key;
		$this->iv = $iv;
	}

	public function encrypt($data) {
		return base64_encode(openssl_encrypt($data, "des-ede3-cbc", $this->key, OPENSSL_RAW_DATA, $this->iv));
	}

	public function decrypt($data) {
		return openssl_decrypt(base64_decode($data), 'des-ede3-cbc', $this->key, OPENSSL_RAW_DATA, $this->iv);
	}

}
