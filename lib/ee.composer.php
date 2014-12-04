<?php
	if (file_exists('vendor/qoxcorp/exengine-core/ee.php')) {
		include_once('vendor/qoxcorp/exengine-core/ee.php');
	} else {
		echo '<h1>Include Error</h1>';
		echo '<p>Cannot load ExEngine Core from Composer.</p>';
	}
?>