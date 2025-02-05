<?php
echo '<pre>';
if(array_key_exists('colors', $_POST))
{
	echo "<h2>Выбранные цвета</h2>";
	//print_r($_POST);
	$colors = $_POST['colors'];
	foreach($colors as $color)
	echo "$color<br>";
}
else 
echo '<h2>Цвета не выбраны</h2>';
echo '</pre>';
?>