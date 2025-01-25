<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
</head>
<body>
    <h1><?= $title; ?></h1>
    <?php
        [$a, $b] = [2, 3];
        print_values($a, $b, '.');
        $exchange($a, $b);
        print_values($a, $b, '.');
        echo sum_values(3,5,8,13,21);

        echo '<hr>';

        $arr = array();
        //FillRand($arr);
        //FillRand(arr:$arr, maxRand:1000);
        FillRand($arr, maxRand:1000);
        PrintArr($arr);
        echo '<hr>';

        echo'<pre>';
        //Суперглобальные переменные
        //print_r($GLOBALS);
        //print_r($_SERVER);
        //$_GET
        //$_POST
        //print_r($_ENV);

        //Статическая переменная
        echo increment() . "\n";
        echo increment() . "\n";
        echo increment() . "\n"; 
        echo'</pre>';
        echo '<hr>';

         echo'<pre>';

        //Строготипизированные функции       
        echo sum((int)2.7, (int)3.14);
        echo '<hr>';

        // Стрелочные функции
        echo $arrow_function();
        echo $non_arrow_function();
        echo'</pre>';
        echo '<hr>';

        //анонимная функция
        echo $circle_area(5);
        echo '<hr>';
    ?>
</body>
</html>