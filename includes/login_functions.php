<?php

include '..require/connections.php';

function secure_session() {
	$session_name = 'sec_session_id';
	$secure = TRUE;

	$httponly = TRUE;

	if(ini_set('session.use_only_cookies', 1) === FALSE){
		die("FAILED TO INITIATE SAFE SESSION");
	}

	// sets a variable to equal current cookie paramaters
	// then gets cookie parameters
	$cookieParams = session_get_cookie_params();
	session_set_cookie_params($cookieParams["lifetime"],
		$cookieParams["path"],
		$cookieParams["domain"],
		$secure,
		$httponly);

	// setting session name to above set
	session_name($session_name);
	session_start();	// initiates php session
	session_regenerate_id();
}

function login($username, $password, $connection){
	
}

?>