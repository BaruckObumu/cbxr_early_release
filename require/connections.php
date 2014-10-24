<?php
$myslqcon = array(
	'host' => 'sql207.byetcluster.com',
	'user' => 'b14_15353210',
	'pass' => 'administrator1217',
	'db'   => 'b14_15353210_users'
	);

$connection = mysqli_connect($myslqcon['host'], $myslqcon['user'], $myslqcon['pass'], $myslqcon['db']);

?>