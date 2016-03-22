<?php

/**
 * This script is created to be runned in a console at your app root folder using the following commands:
 *
 * 		php bin\mvctool.php [COMMANDS]
 *
 * You can write --help at the end of the command line to get a full list of commands.
 *
 * QOX Corporation - www.qox-corp.com
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);
include_once(dirname(__FILE__).'/../lib/exengine/ee.php');

new exengine(array("SpecialMode"=> "MVCOnly"));
include_once(dirname(__FILE__).'/../config/eemvc.php');
$mvctool = new ExEngine\MVC\Tool(new \ExEngine\MVC\ApplicationConfig());
$mvctool->run();