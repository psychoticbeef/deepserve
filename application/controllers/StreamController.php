<?php

class IndexController extends Zend_Controller_Action
{

	private static $_redis = NULL;
	private $_files_created = array();

	function __construct() {
		if (self::$_redis === NULL) {
			$parameters = array(
					'host'     => '127.0.0.1',
					'port'     => 6379,
					'database' => 13
					);
			self::$_redis = new Predis\Client($parameters);
		}
		register_shutdown_function(array($this, 'delete_files'));
	}

	public function init()
	{
		/* Initialize action controller here */
	}

	public function indexAction()
	{
		// action body
	}

	/**
		encodes music file to specified format, and prepares it for further actions;
	 */
	private function encode_file() {
		// $this->_files_created []= $fucking_file;
	}

	private function delete_files() {
		foreach ($this->_files_created as $tmp_file) {
			$result = unlink($file_name);
			assert($result);
		}
	}

	public function streamAction() {
	}

	public function downloadAction() {
	}

}

