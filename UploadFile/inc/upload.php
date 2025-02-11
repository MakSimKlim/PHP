<?php
	echo'<pre>';
	print_r($_FILES);
	//$fullpath = 'D:\\PHP\\' . $_FILES['file']['name'];
	$fullpath = __DIR__ . '\..\uploads\\' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $fullpath);
	echo'<pre>';
?>