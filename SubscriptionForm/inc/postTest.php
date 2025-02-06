<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обработка результатов теста
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Ответы на вопросы
    $answers = [
        'q1' => 'b',
        'q2' => 'a',
        'q3' => 'c',
        'q4' => 'd',
        'q5' => 'b'
    ];
    
    $score = 0;
    foreach ($answers as $question => $correctAnswer) {
        if (isset($_POST[$question]) && $_POST[$question] == $correctAnswer) {
            $score++;
        }
    }
    
    // Вывод результата
    echo "<h2>Спасибо, $name!</h2>";
    echo "<p>Ваш E-mail: $email</p>";
    echo "<p>Ваш результат: $score из 5</p>";
    exit();
}
?>