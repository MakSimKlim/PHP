<?php
require_once __DIR__ . '/data.php';
//session_start();
echo '<pre>';
print_r($_POST);
print_r($_SESSION);
echo '</pre>';

$asked_questions = array_keys($_SESSION['user_answers']);
$user_answers = array_values($_SESSION['user_answers']);
$score = 0;
for($i = 0; $i < count($user_answers); $i++)
{
	$origin_number = $asked_questions[$i];
	//$origin_number = explode('_', $asked_questions[$i])[1];
	$answer = $user_answers[$i];
	//$answer = explode('_', $user_answers[$i])[1];
	if($answer == $correct_answers[$origin_number])$score++;
}
$total_questions = count($user_answers);
echo "Number correct answers {$score} from {$total_questions}.";
//foreach($POST as $user_answer)
//{
//	$variant = explode('_', $user_answer);
//
//}
session_destroy();
?>

<!--<?php
require_once __DIR__ . '/data.php';
session_start(); // Начало сессии для доступа к пользовательским данным


// Массив для хранения ответов пользователя
$user_answers = $_SESSION['user_answers'];
$score = 0;
for ($i = 0; $i < count($user_answers); $i++) {
    $answer = $_SESSION['user_answers'][$i];
    if ($answer == $correct_answers[$i]) $score++;
}

echo "<p>Number of correct answers: {$score}.</p>";

// Уничтожение сессии после отображения результатов
session_destroy();
?>-->



<!-- Вариант для отображения всех вопросов на одной странице: -->
<!--<?php

echo '<pre>';
print_r($_POST);
echo '</pre>';

require_once __DIR__ . '/data.php';
$asked_questions = array_keys($_POST);
$user_answers = array_values($_POST);
$score = 0;
for($i = 0; $i < count($user_answers); $i++)
{
	$origin_number = explode('_', $asked_questions[$i])[1];
	$answer = explode('_', $user_answers[$i])[1];
	if($answer == $correct_answers[$origin_number])$score++;
}
echo "Number correct answers {$score}.";
//foreach($POST as $user_answer)
//{
//	$variant = explode('_', $user_answer);
//
//}
?> -->

