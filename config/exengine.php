<?php
/**
 * MVC-ExEngine
 * This file contains the ExEngine configuration, you must set it properly, in almost all cases you just only need
 * to set the http_path parameter, remember must relative to the exengine installation that is stored in /lib/exengine
 * by default.
 */

$ee_config =
	array(
		"http_path" => "/lib/exengine/", # Full path to ExEngine (http://myhost:port/myapp/exengine/) (you can use /myapp/exengine/ also)
		"https_path" => "same", # Full path to ExEngine (SSL) (https://myhost:port/myapp/exengine/) (you can use /myapp/exengine/ also) (Set to "same" to use the http_path value)
		"pear_path" => "auto", # Set to "auto" for not changing the default include directory.

		"php_timezone" => 'America/Lima', # Supported timezones: http://www.php.net/manual/en/timezones.php

		#ExEngine Commander Password (Not Implemented)
		"eeCPassw" => "prueba1234",

		#ForwardMode (enables ExEngine 6 compatibility, requires ExEngine 6 also installed) (HYBRID APPS ARE NOT RECOMMENDED)
		"forwardmode" => false,

		#Debug mode (start default debugger at http://apphost/exengine_lib_path/eefx/common/debug.php or create a remote debugger):
		"debug" => true,

		#DevGuard (see examples)
		"devguard" => false, #DevGuard enable/disable (enables the lib loading, you must instanciate it for using it).
		"devguard_keys_path" => "", #DevGuard keys files path, full path is required (ex. /var/mykeysfolder/).

		#ExEngine Storage (if using more than one application with the same EE install, please set the $ee->appName variable for each application)
		"storage" => false, #enable/disable support (if enabled, directory check will be done each time storage is used.)
		"storage_path" => "", #Path to the Storage folder, must have full write and read support from script, is not recommended that storage folder is publicly available.
		"storage_check" => true, #Check storage folder at ExEngine construction.

		#Debug/Monitor mode | Intensive database usage mode. (Not implemented)
		"monitor-mode"=>false, #This enables all traffic debugging (read documentation for more info.).
		"monitor-prefix"=>"ee7mon_", #Prefix for database tables in Monitor Mode.
		"monitor-db"=>"default", #Can be a database configuration array, or "default" to use def. database.

		# GetImagesFromDir Supported Images Array (in mime format)
		"GIFD_ValidImages" => array("image/jpeg", "image/gif", "image/png")
	);
?>