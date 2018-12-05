<?php
namespace Osi\Des;

/**
 * Class Des3
 * @package des3
 */
class Des {
	/**
	 * @var string
	 */
	var $key = '';

	/**
	 * @var string
	 */
	var $iv = '';

	/**
	 * Des constructor.
	 * @param string|null $key
	 */
	public function __construct(string $key = null) {
		$this->key = $key;
	}
	/**
	 * des-ecb加密
	 * @param string  $data 要被加密的数据
	 */
	function encrypt($data) {
		return openssl_encrypt($data, 'des-ecb', $this->key);
	}

	/**
	 * des-ecb解密
	 * @param string  $data 加密数据
	 */
	function decrypt($data) {
		return openssl_decrypt($data, 'des-ecb', $this->key);
	}
}
