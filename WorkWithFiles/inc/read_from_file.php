<?php
	$filename = '../files/file.txt';
	$file = fopen('../files/file.txt', 'r');
	echo '<pre>';
	var_dump($file);
	echo '<pre>';
	echo fread($file, filesize($filename));
	echo '. File size: ' . filesize($filename) . 'Bytes';
	fclose($file);
?>