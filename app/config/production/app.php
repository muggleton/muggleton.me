<?php
// Require private configuration so cannot be viewed in public respitory
require_once('/var/www/muggleton.me/private.php');

return array(
	'debug' => false,
	'url' => 'http://muggleton.me',
	'key' => $private['app']['key'],
	);
