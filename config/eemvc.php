<?php

/**
 * MVC-ExEngine Application Configuration File
 * You can read the DefaultApplicationConfig in (lib/exengine/eefx/lib/mvc-exengine/mvcee_applicationconfig.php) where
 * are all the configuration variables, most of them are self-explanatory, for more information check online docs.
 * http://oss.qox-corp.com/exengine/docs/
 */

namespace ExEngine\MVC;

class ApplicationConfig extends DefaultApplicationConfig {

	function ApplicationInit() {

		# This will enable the session support, not enabled by default (DevGuard requires Session Support)
		// $this->SessionCfg->Enabled = true;

		# Set ExEngine's Application Name, required for ExEngine's Storage
		// $this->ExEngineApplicationName = 'my_application_name';

		# Enable Composer autoloading and detection of some web UI frameworks. Important: Some advanced functions like
        # sandboxing, requires composer and will load it if is detected even if this value is false.
		// $this->ComposerAutoload = true;

		# Enable ExEngine DevGuard.
        # DevGuard is a session-based unauthorized access protection, you must create a two-key pair before enabling
        # this. To create the two-key pair you can use mvctool (read the file README_1st in the root of mvc-exengine).
        # Important: You must enable DevGuard in ExEngine configuration file also. DevGuard is a Core feature.
        // $this->DevGuard = true;
		// $this->DevGuardKey = '';

		# Set Application Default Locale, System default is 'en'
		// $this->DefaultLocale = 'en';

        # Enable locales automatic generation.
        # Important: You should chmod the locales files to enable writing, no error will be provided but the file will
        # not be updated.
        # $ cd app/locales/
        # $ chmod a+w *.yml
        # When going to production, remember to remove writing access.
        # $ cd app/locales
        # $ chmod a-w *.yml
        // $this->AutomaticLocalePopulate = true;
        # Disable all root yml files update when automatic generation, only the default locale file will be updated.
        // $this->PopulateAllLocales = false;

		# You can enable rewrite rules support (not enabled by default)
		// $this->RewriteRulesEnabled = true;
		// $this->RewriteBaseFolder = 'myapp'; // Set this if your app is not in the root of the domain (ex. //localhost/myapp)

		# You can include your own includes here:
        # Note: Avoid requiring Composer's Autoload, use $this->ComposerAutoload = true;
		# ex. include_once ('lib/mylib/mylib.php');
		# ex. require 'lib/lib.php';

	}
}