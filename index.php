<?php
/**
 * MVC-ExEngine
 * Default index file, normally you just don't need to modify this file, to add includes, add them in the
 * ApplicationInit method in the config/eemvc.php file, if you are using composer, set
 * $this->ComposerAutoload = true; in the ApplicationInit method, just go there for more information.
 * 
 * QOX Corporation - www.qox-corp.com
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);

if (!file_exists("lib/exengine/ee.php")) {
	print '<h1>MVC-ExEngine</h1><p>ExEngine framework is not installed, please read the README file in the lib/ folder for more information.</p>';
	exit();
}

include_once( 'config/exengine.php' );
include_once( 'lib/exengine/ee.php' );
$ee = new \ExEngine\Core(["SpecialMode" => "MVCOnly","AutoSession" => false], $ee_config);
include_once( 'config/eemvc.php' );

$mvc = new \ExEngine\MVC\Index(new \ExEngine\MVC\ApplicationConfig());
$mvc->start();
?>