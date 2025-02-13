<?php
	$filename = '../files/writeToFile.txt';
	$file = fopen($filename, 'w');
	fwrite($file, 'Hello files from PHP!!!\nThis is a write message');
	echo 'File size: ' . filesize($filename) . 'Bytes';
	fclose($file);
?>