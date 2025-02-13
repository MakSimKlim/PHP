<?php
	$to='mamkinhackermail@internet.ru';
	$subject='Privet';
	$message='Test message from PHP';
	$headers = 
	'From: 83maxomus@mail.ru' . "\r\n" . 
	'Reply-To:83maxomus@mail.ru' . "\r\n" . 
	'X-Mailer: PHP/' . phpversion();
	echo mail($to, $message, $subject, $headers);
?>