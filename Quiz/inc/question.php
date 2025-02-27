<?php
require_once __DIR__.'/data.php';
$number = $_REQUEST['q'];
$answer;
echo '<pre>';
if(array_key_exists('a', $_REQUEST) == true)
{
	$answer = $_REQUEST['a'];
	$question_number = explode('_', $answer)[0];
	$user_answer = explode('_', $answer)[1];
	$user_answers[$question_number] = $user_answer;
	echo 'Answer:';
	//print_r($user_answers);	
	$_SESSION['user_answers'][$question_number] = $user_answer; 
	print_r($_SESSION);
}
//
print_r($_REQUEST);
//print_r($user_answers);
echo '</pre>';
if($number < count($questions))
{
	//echo $number;
	$response = "<h2>{$questions[$number]}</h2>";
	for($i=0; $i < count($answers[$number]); $i++)
	{
		if(array_key_exists('user_answers', $_SESSION) && array_key_exists($number, $_SESSION['user_answers']) && $i == $_SESSION['user_answers'][$number])
			$response .= "<input type=\"radio\" id=\"{$number}_{$i}\" name=\"question_{$number}\" value=\"{$number}_{$i}\" checked>";

		else 
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
	$response .= "<input type=\"submit\" value=\"submit\">";
	//$response .= "<input type=\"submit\" value=\"submit\" onclick=\"result()\">";
}
	echo $response;
?>