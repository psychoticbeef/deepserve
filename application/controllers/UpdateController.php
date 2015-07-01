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
		instructs the server to rescan the library for changes
	 */
	public function forceAction() {
	}


}

