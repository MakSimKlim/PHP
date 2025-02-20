<?php
require_once __DIR__.'/data.php';
$number = $_REQUEST['q'];
if($number < count($questions)-1)
{
	echo $number;
	$response = "<h2>{$questions[$number]}</h2>";
	for($i=0; $i < count($answers[$number]); $i++)
	{
		$response .= "<input type=\"radio\" id=\"{$number}_{$i}\" name=\"question_{$number}\" value=\"{$number}_{$i}\">";
		$response .= "<label for=\"{$number}_{$i}\">{$answers[$number][$i]};</label><br>";
	}
	$response .= "<input type=\"button\" value=\"next\" onclick=\"nextQuestion()\">";
}
else 
{
	$response = "<h2>Вы ответили на все вопросы. Нажмите кнопку 'Submit' чтобы узнать результаты текста</h2>";
	$response .= "<input type=\"submit\" value=\"submit\" onclick=\"nextQuestion()\">";
}


	echo $response;
?>