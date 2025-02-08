<?php 	
	session_start();
	require_once __DIR__ . '/inc/flash.php';
	require_once __DIR__ . '/inc/header.php';
?>

<h1>Flash Messages</h1>

<?php
	create_flash_message('hello', 'Hello FlashMessages', 'info');
	create_flash_message('warning', 'Warning FlashMessages', 'warning');
	print_r($_SESSION);
	//echo format_flash_message($_SESSION[FLASH]['hello']);
	//display_flash_message('hello');
	display_all_flash_messages();
?>

<?php require_once __DIR__ . '/inc/footer.php';?>