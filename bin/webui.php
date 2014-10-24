<?php
    error_reporting(E_ALL ^ E_NOTICE);
    ini_set("display_errors", 1);
    include_once(dirname(__FILE__).'/../lib/exengine/ee.php');

    new exengine(array("SpecialMode"=> "MVCOnly"));
    include_once(dirname(__FILE__).'/../config/eemvc.php');
    $mvctoolui = new ExEngine\MVC\WebTool(new \ExEngine\MVC\ApplicationConfig());
    $mvctoolui->run();
?>