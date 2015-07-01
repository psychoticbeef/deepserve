<?php


$user_ini_file = CONFIGS_PATH . '/user.ini';
set_include_path(implode(PATH_SEPARATOR, array(
  realpath(APPLICATION_PATH . '/../library'),
  get_include_path(),
)));

require_once ('Zend/Application.php');
require_once ('Zend/Config/Ini.php');

// Load application and user ini
$ini = new Zend_Config_Ini(APPLICATION_PATH . '/configs/application.ini', APPLICATION_ENV, true);
$ini_user = new Zend_Config_Ini($user_ini_file, APPLICATION_ENV);
$ini->merge($ini_user);

// Create application, bootstrap, and run
global $application;
$application = new Zend_Application(APPLICATION_ENV, $ini);
$application->bootstrap();

