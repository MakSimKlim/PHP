<?php
//print_r($_POST);
if(array_key_exists('color', $_POST))
	echo 'Ваш любимый цвет: ' . COLORS[$_POST['color']];
else 
	echo 'Выберите цвет';


?>