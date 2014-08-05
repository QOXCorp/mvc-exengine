<?php
/**
 * MVC-ExEngine
 * Default index file, normally you just don't need to modify this file, to add includes, add them in the
 * ApplicationInit method in the config/eemvc.php file, if you are using composer, set
 * $this->ComposerAutoload = true; in the ApplicationInit method, just go there for more information.
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);

include_once( 'config/exengine.php' );
include_once( 'lib/exengine/ee.php' );
$ee = new \ExEngine\Core(["SpecialMode" => "MVCOnly"], $ee_config);
include_once( 'config/eemvc.php' );

$mvc = new \ExEngine\MVC\Index(new \ExEngine\MVC\ApplicationConfig());
$mvc->start();
?>