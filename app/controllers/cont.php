<?php
/**
* MVC-ExEngine
* This controller was generated using MVCTool.
* Date: 05/08/2014
* Timestamp: 1407261773
*/
	class Cont extends \ExEngine\MVC\Controller {
		/* Set this var to true when writing Ajax servers, it will not load the layout */
		var $imSilent = false;

		/* You can set a different layout than the default one setting this variable */
		var $layout = "default";

		/* You can pass additional data to the layout with this variable, remember its an associative array */
		var $layoutData = [];

		/* You can set the default locale for this controller, set to "default" to use the application default. */
		var $locale = "en";

		/* You can set here the controller init (will be executed always) */
		protected function __atconstruct() {
			/* write your controller init code here */
		}

		/* this is the default action */
		function index() {
			/* write your code here */
			print "<h1>".$this->I18n->t('Hello World')."</h1>";
		}

		/* Add more actions after this, to use actions just append the action name to the url, check the action3 example for more information
		function action2() {
			# write your code here
			print "<h1>This is action2</h1>";
		}

		function action3($arg1=null) {
			# this action has arguments, you can add more arguments to this action, they will be passed separating each one with `/` in the url,
			# for ex. to pass arg1, you should call this action like this: /cont/action3/argument1, so $arg1 will contain the
			# argument1 string.
			print "<h1>$arg1</h1>";
		}
		*/
	}
?>