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
//echo "Number correct answers {$score} from {$total_questions}.";
$result_message = "Number correct answers {$score} from {$total_questions}.";
echo $result_message;
//foreach($POST as $user_answer)
//{
//	$variant = explode('_', $user_answer);
//
//}

// добавляем чекбокс и кнопку
echo '<form action="/Quiz/index.php" method="post">';
echo '<label>Отправить результаты на e-mail?</label>';
echo '<input type="checkbox" name="send_email" value="1">';
echo '<input type="submit" name="end_test" value="Завершить тестирование">';
echo '</form>';


// Отправка e-mail, если установлен чекбокс и нажата кнопка 'Завершить тестирование'
//if (isset($_POST['send_email']) && $_POST['send_email'] == '1' && isset($_POST['end_test']) && $_POST['end_test'] == 'Завершить тестирование') {
    // Логика отправки e-mail
    $to = 'maxklimov-job@yandex.ru';
    //$to = $_SESSION['email']; // E-mail пользователя из сессии
    $subject = 'Quitz test result';
    $message = $result_message;
    $headers = 
        'From: maximklimov8319@yandex.ru' . "\r\n" . 
        'Reply-To: maximklimov8319@yandex.ru' . "\r\n" . 
        'X-Mailer: PHP/' . phpversion();
    
    mail($to, $subject, $message, $headers);
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

