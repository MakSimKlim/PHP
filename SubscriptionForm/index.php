<?php
require_once __DIR__ . '/inc/header.php';

$errors = [];
$inputs = [];
$request_method = $_SERVER['REQUEST_METHOD'];

//require_once __DIR__ . '/inc/get.php';
if($request_method === 'GET')
	require_once __DIR__ . '/inc/get.php';
else if ($request_method === 'POST') {
	require_once __DIR__ . '/inc/post.php';
	if(count($errors) > 0)
		require_once __DIR__ . '/inc/get.php';
}
require_once __DIR__ . '/inc/footer.php';
?>