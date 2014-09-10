<?php
$myslqcon = array(
	'host' => '127.0.0.1',
	'user' => 'root',
	'pass' => 'meggiemoo12',
	'db'   => 'users'
	);

$connection = mysqli_connect($myslqcon['host'], $myslqcon['user'], $myslqcon['pass'], $myslqcon['db']);

?>