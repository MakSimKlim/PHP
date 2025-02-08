<?php

const FLASH = 'FLASH_MESSAGES';

const FLASH_SUCCESS = 'success';
const FLASH_WARNING = 'warning';
const FLASH_ERROR = 'error';
const FLASH_INFO = 'info';

function create_flash_message(string $name, string $message, string $type)
{
	if(isset($_SESSION[FLASH][$name]))
		unset($_SESSION[FLASH][$name]);
		$_SESSION[FLASH][$name] = ['message' => $message, 'type' => $type];
}

function format_flash_message(array $flash_message): string
{
	return sprintf
	(
		'<div class="alert alert-%s">%s</div>',
		$flash_message['type'],
		$flash_message['message']
	);
}

function display_flash_message(string $name): void
{
	if(!isset($_SESSION[FLASH][$name]))
		return;
	$flash_message = $_SESSION[FLASH][$name];
	unset($_SESSION[FLASH][$name]);
	echo format_flash_message($flash_message);
}

function display_all_flash_messages(): void
{
	if(!isset($_SESSION[FLASH]))
		return;
	$flash_message = $_SESSION[FLASH];

	unset($_SESSION[FLASH]);

	foreach($flash_messages as $message)
		echo format_flash_message($message);
}

function flash(string $name = '', string $message = '', string $type = ''): void
{
	if($name !== '' && $message !== '' && $type !== '')
		create_flash_message($name, $message, $type);
	elseif($name !== '' && $message === '' && $type === '')
		display_flash_message($name);
	elseif($name === '' && $message === '' && $type === '')
		display_all_flash_messages();
}

?>