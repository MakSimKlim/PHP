<?php
    ob_start();

    if (!isset($_COOKIE['TestCookie'])) {
        setcookie('TestCookie', '1', time() + 3600);
        echo 'Куки установлены.';
    } else {
        echo 'Куки уже установлены.';
    }

    ob_end_flush();
?>
