<?php

/**
 * This script is created to be runned in a console using the following commands:
 *
 * 		php mvctool.php [COMMANDS]
 *
 * You can write --help at the end of the command line to get a full list of commands.
 *
 * Ex #1. Creating a new controller:
 *
 * 		php mvctool.php -g controller Start index,login,logout
 *
 * The command will create a new controller with the name "Start" with the following actions: index, login and logout.
 *
 * Ex #2. Creating a new model:
 *
 * 		php mvctool.php -g model Book title,author,summary
 *
 * The command will create a new model with the name "Book" with the following properties: title, author and summary.
 *
 * Ex #3. Creating a new DBO model:
 *
 * 		php mvctool.php -g model_dbo MySQL:default
 *
 */
error_reporting(E_ALL ^ E_NOTICE);
ini_set("display_errors", 1);
include_once(dirname(__FILE__).'/../lib/exengine/ee.php');

new exengine(array("SpecialMode"=> "MVCOnly"));
include_once(dirname(__FILE__).'/../config/eemvc.php');
$mvctool = new ExEngine\MVC\Tool(new \ExEngine\MVC\ApplicationConfig());
$mvctool->run();

?>