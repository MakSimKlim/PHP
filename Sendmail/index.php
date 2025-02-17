<?php
	$to='maxklimov-job@yandex.ru';
	$subject='Privet2';
	$message='Test message from PHP';
	$headers = 
	'From: maximklimov8319@yandex.ru' . "\r\n" . 
	'Reply-To:maximklimov8319@yandex.ru' . "\r\n" . 
	'X-Mailer: PHP/' . phpversion();
	echo mail($to, $subject, $message, $headers);
?>