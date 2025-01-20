<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>    
    <meta charset="utf-8" />
    <!--<?php $for="Introduction to PHP"?>-->
    <title><?php echo $for;?></title>
</head>
<body>
    <h1><?php echo 'Hello PHP on IIS' ?></h1>
    <h2><?php echo $for;?></h2>
    <h2>Functions:</h2>
    <?PHP print_value('Test value: ', 1024)?>
    <?PHP factorial(5)?>
    <?PHP echo "!5 =", factorial(5)?>
    <?PHP echo 2**-3;?>
    <p>Ряд Фибаначи с помощью рекурсии</p>
    <?PHP 
        for ($i = 0; $i < 30; $i++) 
        {
            echo Fibonacci($i) . " ";
        }
    ?>
    <p>Содержимое страницы</p>
    <p>Statements</p>
    <p>$name=value</p>
    <p>index.php</p>
    <p>index.view.php</p>
    <p>require</p>
    <?php
        echo '<hr>';
        echo 'var_dump() - функция, которая определяет тип любого значения<br>';
        echo var_dump(100);
        echo '<br>';
        echo var_dump('3.14');
        echo '<br>';
        echo var_dump(NULL);
        echo '<br>';
        echo var_dump(3.14);
        echo '<br>';
        echo var_dump(false);
        echo '<br>';
        echo '<hr>';
        echo 'die() - функция, которая завершает скрипт в месте её применения в коде<br>';
        //die(); - функция, которая останавливает скрипт
        echo '<hr>';
        echo NAME;
        echo '<hr>';

        //echo PI;
        //for($i=0; $i<10; $i++)
        //{
            //echo '<p>';
            //echo '<div style="display:flex; justify-content:space-between;">';
                //echo '<div style="width:50px">';
                    //echo $i;
                //echo '</div>';
            //echo '</div>';
            //echo '</p>';
        //}
        if(true)
        {
            //const PI = 3.14;
            define('PI', '3.14');
            echo PI;
            echo '<br>';
            define(PREFIX . '_1', '1');
            define(PREFIX . '_2', '2');
            define(PREFIX . '_3', '3');

            echo '<hr>';
            echo OPTION_1;

            echo '<br>';

            echo '<hr>';
            echo $int;
        }
        echo '<hr>';
    ?>
            
    <h2>Типы данных</h2>
    <ol>
        <li>Скалярные типы (Scalar types)
            <ul>
                <li>Boolean: <?php echo true; echo false; ?></li>
                <li>Integer: <br>
                    Size:<?php echo PHP_INT_SIZE ?></li>
                    PHP_INT_MIN:<?php echo PHP_INT_MIN; echo '<br>'; echo 'PHP_INT_MAX:'; echo PHP_INT_MAX;?>
                <li>Float (double, real): <br>
                    PHP_FLOAT_MIN:<?php echo PHP_FLOAT_MIN; echo '<br>'; echo 'PHP_FLOAT_MAX:'; echo PHP_FLOAT_MAX;?>
                </li>
                <li>String: <?php echo strlen('Hello')?></li>
            </ul>
        </li>
        <li>Составные типы (Conpound types)
            <ul>
                <li>Array</li>
                <li>Object</li>
                <li>callable</li>
                <li>iterable</li>
            </ul>
        </li>
        <li>Специальные типы (Special types)
            <ul>
                <li>Null</li>
                <li>Reference</li>                
            </ul>
        </li>


    </ol>
    <h3>Heredoc-строка</h3>
    <?PHP
        echo '<hr>';
        echo $heredoc_string;
        echo '<hr>';
         echo $nowdoc_string;
        echo '<hr>';
        echo $heredoc_string2;
        echo '<hr>';
    ?>

</body>
</html>