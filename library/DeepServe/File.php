<?php

class DeepServe_File {

	use DeepServe_Trait_Singleton;

	private $_tmp_directory = null;
	private $_files = array();


	public function __construct() {
		$this->_tmp_directory = sys_get_temp_dir() . '/deepserve/';
		register_shutdown_function(array($this, 'delete_files'));
	}

	public function mkdir($dir, $mode = 0777, $recursive = false) {
		$result = mkdir($dir, $mode, $recursive);
    assert($result, 'Could not create directory: ' . $dir));
	}

  public function get_tmp_file() {
    $result = $this->_tmp_directory . uniqid();
    array_push($this->_files, $result);
    return $result;
	}

	public function delete_files() {
		foreach($this->_files as $file) {
			unlink($file);
		}
	}

