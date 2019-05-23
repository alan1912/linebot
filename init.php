<?php

$envFileName = 'env.php';
if (!file_exists($envFileName)) {
	$envContents = "<?php
// LINEBOT
define('LINEBOT_ACCESS_TOKEN', '');
define('LINEBOT_SECRET', '');
	";
	file_put_contents($envFileName, $envContents);
} else {
	require_once $envFileName;
}
