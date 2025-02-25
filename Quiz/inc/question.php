<?php
require_once __DIR__.'/data.php';
$number = $_REQUEST['q'];
$answer;
if(in_array('a', $_REQUEST))$answer = $_REQUEST['a'];
print_r($_REQUEST);
if($number < count($questions))
{
	echo $number;
	echo $answer;
	$response = "<h2>{$questions[$number]}</h2>";
	for($i=0; $i < count($answers[$number]); $i++)
	{
		$response .= "<input type=\"radio\" id=\"{$number}_{$i}\" name=\"question_{$number}\" value=\"{$number}_{$i}\">";
		$response .= "<label for=\"{$number}_{$i}\">{$answers[$number][$i]};</label><br>";
	}

	// Добавляем кнопку "prev", если это не первый вопрос
    if ($number > 0) 
	{
        $response .= "<input type=\"button\" value=\"prev\" onclick=\"prevQuestion()\">";
    }

	// Добавляем кнопку "next", если это не последний вопрос
	$response .= "<input type=\"button\" value=\"next\" onclick=\"nextQuestion()\">";
}
else 
{
	$response = "<h2>Вы ответили на все вопросы. Нажмите кнопку 'Submit' чтобы узнать результаты текста или 'prev' чтобы вернуться назад</h2>";
	$response .= "<input type=\"button\" value=\"prev\" onclick=\"prevQuestion()\">";	
	$response .= "<input type=\"submit\" value=\"submit\" onclick=\"result()\">";
}
	echo $response;
?>