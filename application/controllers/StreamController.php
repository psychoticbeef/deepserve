<?php

class IndexController extends Zend_Controller_Action
{

	private static $_redis = NULL;

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
		// $dest = DeepServe_File::get_instance()->get_tmp_file();
	}

	public function streamAction() {
	}

	public function downloadAction() {
	}

}

