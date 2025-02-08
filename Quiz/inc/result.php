<?php
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
?>




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