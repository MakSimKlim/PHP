<?php
	$nickname = $_POST['nickname'];
	$email = $_POST['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	if($email){
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if(!$email) $error['email'] = 'Enter valid E-mail';
		else		$error['email'] = 'Please enter E-mail';
	}
	$inputs['subject'] = $subject = $_POST['subject'];
	$inputs['message'] = $message = $_POST['message'];

	if(!$message || trim($message) === '')
	$error['message'] = 'Please enter the message';
?>