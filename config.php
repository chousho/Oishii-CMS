<?php
/**
 * Include all required class files
 */
 define("FOLDER", "/");
function __loadClass($classname){
	$classdir = str_replace("_", FOLDER, $classname);
	include_once "library/" . $classdir . ".php";
}

spl_autoload_register('__loadClass');

$dbinfo = array(
        'host'     => 'localhost',
        'username' => 'webuser',
        'password' => 'xxxxxxxx',
        'dbname'   => 'test'
        );

$db = Zend_Db::factory('Pdo_Mysql', $dbinfo);

