<?php
namespace Osi\Des;

/**
 * Class Des
 * @package des
 */
class Des {
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
	 * Des constructor.
	 * @param string|null $key
	 */
	public function __construct(string $mode, string $res, string $key = null) {
		$this->mode = $mode;
		$this->res = $res;
		$this->key = $key;
	}
	/**
	 * des-ecb加密
	 * @param string  $data 要被加密的数据
	 */
	function encrypt($data) {

		return call_user_func(encryptFunc($this->res), openssl_encrypt($data, $this->mode, $this->key, OPENSSL_RAW_DATA));
	}

	/**
	 * des-ecb解密
	 * @param string  $data 加密数据
	 */
	function decrypt($data) {
		return openssl_decrypt(call_user_func(decryptFunc($this->res), $data), $this->mode, $this->key, OPENSSL_RAW_DATA);
	}
}
