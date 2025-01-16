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
    <p>Содержимое страницы</p>
    <p>Statements</p>
    <p>$name=value</p>
    <p>index.php</p>
    <p>index.view.php</p>
    <p>require</p>
    <?php
        echo NAME;
        echo '<br>';
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

            echo OPTION_1;

            echo '<br>';
            echo $int;
        }
        
    ?>
    <h2>Типы данных</h2>
    <ol>
        <li>Скалярные типы (Scalar types)
            <ul>
                <li>Boolean: <?php echo true; echo false; ?></li>
                <li>Integer: <br>
                    Size:<?php echo PHP_INT_SIZE ?></li>
                    PHP_INT_MIN:<?php echo PHP_INT_MIN; echo '<br>'; echo 'PHP_INT_MAX:'; echo PHP_INT_MAX;?>
                <li>Float (double, real)</li>
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
    

</body>
</html>