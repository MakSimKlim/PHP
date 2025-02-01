<?php

	echo "<h1>Бобро пожаловать, " . $_POST['name'] . ", спасибо за регистрацию</h1>";	
	
	echo '<pre>';
	echo '<hr>';
	var_dump($_POST['name']);
	var_dump($_POST['password']);
	var_dump($_POST['email']);
	echo '<hr>';
	print_r($GLOBALS);
	echo '</pre>';
?>