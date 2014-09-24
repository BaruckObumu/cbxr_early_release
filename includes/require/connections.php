<?php
$myslqcon = array(
	'host' => '127.0.0.1',
	'user' => '830743_admin',
	'pass' => 'meggiemoo12',
	'db'   => 'chatboxer_zzl_users'
	);

$connection = mysqli_connect($myslqcon['host'], $myslqcon['user'], $myslqcon['pass'], $myslqcon['db']);

?>