<?php
	// Куки
	//setcookie('test', 'value', time() + 3600);
	//print_r($_COOKIE);

	// Сессии
	//echo 'Hello sessions';
	session_name('ADMIN_SESSION');
	session_start();
	
	echo '<pre>';
	
	$_SESSION['user'] = 'admin';
	//echo session_save_path();
	print_r($_SESSION);	
	//print_r($GLOBALS);
	//print_r($_SERVER);

	
	
	echo '</pre>';
?>