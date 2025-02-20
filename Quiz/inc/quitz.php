<!--<?php
session_start();
require_once __DIR__ . '/data.php';

  

// Инициализация переменной для отображения приветственного сообщения
$show_greeting = false;

if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
    $_SESSION['user_answers'] = [];
    $_SESSION['show_greeting'] = true; // Сохранение состояния приветственного сообщения

    // Сохранение информации о пользователе в сессии
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['middle_name'] = $_POST['middle_name'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $question_index = $_SESSION['question_index'];
    if (isset($_POST["answer"])) { // Проверка на наличие ключа "answer"
        $_SESSION['user_answers'][$question_index] = $_POST["answer"];
    }

    if (isset($_POST['next'])) {
        $question_index++;
    } elseif (isset($_POST['previous'])) {
        $question_index--;
    }

    if ($question_index >= count($questions)) {
        // Перенаправление на страницу результатов после последнего вопроса
        header('Location: result.php');
        exit();
    } else {
        $_SESSION['question_index'] = $question_index;
    }

    // Скрываем приветственное сообщение после первого вопроса
    if ($question_index > 0) {
        $_SESSION['show_greeting'] = false;
    }
}

// Установка переменной $show_greeting из сессии
$show_greeting = isset($_SESSION['show_greeting']) && $_SESSION['show_greeting'];

$question_index = $_SESSION['question_index'];
$current_question = $questions[$question_index];
$current_answers = $answers[$question_index];
?>

<?php if ($show_greeting): ?>
    <?php echo "Hello {$_SESSION['first_name']} {$_SESSION['last_name']} {$_SESSION['middle_name']}, удачи Вам!!!"; ?>
<?php endif; ?>

<h3><?= $current_question ?></h3>
<form action="quitz.php" method="post">
    <?php foreach ($current_answers as $index => $answer): ?>
        <input type="radio" name="answer" id="answer_<?= $index ?>" value="<?= $index ?>" required <?= isset($_SESSION['user_answers'][$question_index]) && $_SESSION['user_answers'][$question_index] == $index ? 'checked' : '' ?>>
        <label for="answer_<?= $index ?>"><?= $answer ?></label><br>
    <?php endforeach; ?>
    <?php if ($question_index > 0): ?>
        <input type="submit" name="previous" value="Previous">
    <?php endif; ?>
    <?php if ($question_index < count($questions) - 1): ?>
        <input type="submit" name="next" value="Next">
    <?php else: ?>
        <input type="submit" name="next" value="Send">
    <?php endif; ?>
</form>-->



<!-- Вариант для отображения всех вопросов на одной странице: -->
<?php 
	require_once __DIR__ . '/data.php';	
	echo "Hello {$_POST['first_name']} {$_POST['last_name']} {$_POST['middle_name']}, удачи Вам!!!"; 
?>

<form action="result.php" method="post">
	<?php for($i=0; $i<count($questions); $i++):?>		
			<h3><?= $questions[$i]?></h3>
				<?php for($j=0; $j<count($answers[$i]); $j++):?>
					<input type="radio" name="<?="question_{$i}"?>" id="<?="{$i}_{$j}"?>" value="<?="{$i}_{$j}"?>">
					<label for="<?="{$i}_{$j}"?>"><?=$answers[$i][$j]?></label><br>
				<?php endfor ?>		
	<?php endfor ?>
	<input type="submit" value="Send" >
</form>
