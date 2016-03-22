<?php
/**
 * MVC-ExEngine
 * This file contains the ExEngine configuration, you must set it properly, in almost all cases you just only need
 * to set the http_path parameter, remember must be relative to the exengine installation that is stored in /lib/exengine
 * by default.
 */

$ee_config =
	[
		# Full path to ExEngine, options:
		# Full url: http://myhost:port/myapp/exengine/
		# Relative url: /myapp/exengine/ -> Recommended for MVC-ExEngine installations.
		"http_path" => "/lib/exengine/",
		# Full path to ExEngine (SSL), options:
		# Full url: https://myhost:port/myapp/exengine/
		# Relative url: /myapp/exengine/
		# Set to "same" to use the http_path value but with the https:// prefix
		"https_path" => "same",
		# PHP Pear compatibility
		# Set to "auto" for not changing the default include directory.
		"pear_path" => "auto",

		# Timezone
		# Supported timezones: http://www.php.net/manual/en/timezones.php
		"php_timezone" => 'America/Lima',

		# Debug mode
		# Start default debugger at http://apphost/exengine_lib_path/eefx/common/debug.php
		# or create a remote debugger (Help: oss.qox-corp.com/exengine/docs/debug).
		"debug" => true,

		# DevGuard (see examples). Note: It requires PHP's mcrypt library installed on server.
		# DevGuard enable/disable (enables the lib loading, you must instantiate it for using it).
		# MVC-ExEngine has automatic support for DevGuard and easy to use keypair generation tool.
		"devguard" => true,
		# DevGuard keys files path, full path is required, is recommended to store the keys outside the webserver paths,
		# (ex. /var/mykeysfolder/).
		"devguard_keys_path" => "",

		#ExEngine Storage (if using more than one application with the same EE install, please set the $ee->appName variable for each application)
		"storage" => false, #enable/disable support (if enabled, directory check will be done each time storage is used.)
		"storage_path" => "", #Path to the Storage folder, must have full write and read support from script, is not recommended that storage folder is publicly available.
		"storage_check" => true, #Check storage folder at ExEngine construction.

		# GetImagesFromDir Supported Images Array (in mime format)
		"GIFD_ValidImages" => array("image/jpeg", "image/gif", "image/png"),

		# Not recommended and not implemented configuration values:

		# ForwardMode
		# Enables ExEngine 6 compatibility, requires ExEngine 6 also installed.
		# Enable this if your really know what you are doing, loading two RAD frameworks is a high memory and cpu cost.
		# Note: HYBRID APPS ARE NOT RECOMMENDED. Consider migrating your app to ExEngine 7+.
		"forwardmode" => false,
		# ExEngine Commander Password (Not Implemented)
		"eeCPassw" => "prueba1234",
		#Debug/Monitor mode | Intensive database usage mode. (Not implemented)
		"monitor-mode"=>false, #This enables all traffic debugging (read documentation for more info.).
		"monitor-prefix"=>"ee7mon_", #Prefix for database tables in Monitor Mode.
		"monitor-db"=>"default" #Can be a database configuration array, or "default" to use def. database.

	];