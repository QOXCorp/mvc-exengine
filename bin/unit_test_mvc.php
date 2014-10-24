<?php
// unit testing can also be run in the CLI, to run this script cd to this folder and run: php unit_test_mvc.php
error_reporting(E_ALL ^ E_NOTICE); 
ini_set("display_errors", 1);
include_once(dirname(__FILE__).'/../lib/exengine/ee.php');
include_once(dirname(__FILE__).'/../config/exengine.php');
$ee_config["storage_check"] = false;
$ee = new exengine(array("SpecialMode"=> "MVCOnly"), $ee_config);
include_once(dirname(__FILE__).'/../config/eemvc.php');
$ee->eeLoad("unittest");
$ut = new EEUnitTest_Suite();
$mvc = new \ExEngine\MVC\Index(new \ExEngine\MVC\ApplicationConfig());
$mvc->prepareUnitTesting(); // prepare MVC lib for UnitTesting (no url parsing, etc.)


$ctl = $mvc->prepareController("inicio");
//$model = $mvc->prepareModel($ctl,"testmodel");
//$model2 = $mvc->prepareModel($ctl,"model2");

$ut->addPackage($ctl);
//$ut->addPackage($model2);

$results = array();
$ut->runTests($results);
?>