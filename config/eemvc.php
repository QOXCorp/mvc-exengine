<?php

/**
 * MVC-ExEngine Application Configuration File
 */

namespace ExEngine\MVC;

Class ApplicationConfig extends DefaultApplicationConfig {

    function ApplicationInit() {

        /* This will enable the session support, not enabled by default (DevGuard requires Session Support)
        $S = new Session();
        $S->Enabled = true;
        $this->SessionCfg = $S;
        */

        /* Enable Composer AutoLoad and Detection of some Web UI Frameworks
        $this->ComposerAutoload = true;
        */

        /* Enable ExEngine DevGuard
        $this->DevGuard = false;
        $this->DevGuardKey = '';
        */

        /* Set Application Default Locale, System default is 'en'
        $this->DefaultLocale = 'en';
		*/

		/* You can enable rewrite rules support (not enabled by default)
		$this->RewriteRulesEnabled = true;
		$this->RewriteBaseFolder = 'billy'; // Set this if your app is not in the root of the domain (ex. //localhost/myapp)
		*/

        /*
        You can include your own includes here:
        ex. include_once ('lib/mylib/mylib.php');
        */

    }
}

?>