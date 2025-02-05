<?php
require_once __DIR__ . '/inc/header.php';

$errors = [];
$inputs = [];
$request_method = $_SERVER['REQUEST_METHOD'];

//require_once __DIR__ . '/inc/get.php';
//if($request_method === 'GET')
//	require_once __DIR__ . '/inc/get.php';
//else if ($request_method === 'POST') {
//	require_once __DIR__ . '/inc/post.php';
//	if(count($errors) > 0)
//		require_once __DIR__ . '/inc/get.php';
//}

echo '<hr>';

//if($request_method === 'GET')
//	require_once __DIR__ . '/inc/getColos.php';
//else if ($request_method === 'POST') {
//	require_once __DIR__ . '/inc/postColors.php';
//	if(count($errors) > 0)
//		require_once __DIR__ . '/inc/getColors.php';
//}

echo '<hr>';

//if($request_method === 'GET')
//	require_once __DIR__ . '/inc/getColor.php';
//else if ($request_method === 'POST'){
//	require_once __DIR__ . '/inc/postColor.php';
//}

echo '<hr>';
const COLORS =
	[
		'black' => 'Черный',
		'red' => 'Красный',
		'green' => 'Зеленый',
		'blue' => 'Синий',
		'white' => 'Белый',
	];
if($_SERVER['REQUEST_METHOD'] === 'GET')		require_once __DIR__ . '/inc/getSelect.php';
else if($_SERVER['REQUEST_METHOD'] === 'POST')	require_once __DIR__ . '/inc/postSelect.php';

require_once __DIR__ . '/inc/footer.php';
?>