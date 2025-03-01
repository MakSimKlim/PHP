<?php
    session_start();
    print_r($_SESSION);
    if(array_key_exists('email', $_SESSION))
    {
	    // Отправка e-mail, если установлен чекбокс и нажата кнопка 'Завершить тестирование'
        $sent = 0;
        if (isset($_POST['send_email']) && $_POST['send_email'] == '1' && isset($_POST['end_test']) && $_POST['end_test'] == 'Завершить тестирование') {
        // Логика отправки e-mail
        //$to = 'maxklimov-job@yandex.ru';
        $to = $_SESSION['email']; // E-mail пользователя из сессии
        $subject = 'Quitz test result';
        $message = $_SESSION['result_message'];
        $headers = 
            'From: maximklimov8319@yandex.ru' . "\r\n" . 
            'Reply-To: maximklimov8319@yandex.ru' . "\r\n" . 
            'X-Mailer: PHP/' . phpversion();
            echo '<pre>';
            echo $to;
            echo $subject;
            echo $message;
            echo $headers;
            echo '</pre>';
        $sent = mail($to, $subject, $message, $headers);
    }
        if($sent === 1)
        echo 'Результат отправлен';
        else echo 'Не удалось отправить результат';
    }

    session_destroy();

    ///////////////////////////////////

	require_once __DIR__ . '/inc/header.php';
	require_once __DIR__ . '/inc/login.php';
	require_once __DIR__ . '/inc/footer.php';
?>