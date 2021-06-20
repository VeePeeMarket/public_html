<?php 

// Fake

$db_host = 'localhost';
$db_user = 'u460895145_user';
$db_pass = 'Victoryous20!';
$db_name = 'u460895145_db';

//$db_host = 'localhost';
//$db_user = 'root';
//$db_pass = '';
//$db_name = 'venrux';
if (!$mysqli = mysqli_connect($db_host, $db_user, $db_pass, $db_name)) {
	die('Fatal Error!!! Switch off your device now!!!');
}


// IP 
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$seller_ip = $_SERVER['HTTP_CLIENT_IP'];
	}elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$seller_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	}else{
		$seller_ip = $_SERVER['REMOTE_ADDR'];
	}

	if (isset($seller_ip)) {
	}else{
		die('Unable To Be Hacked!!! Just Give Up');
	}
 ?>