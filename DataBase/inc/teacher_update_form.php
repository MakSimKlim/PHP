<?php
require_once __DIR__ . '/connection.php';
    $query = "SELECT * FROM Teachers WHERE teacher_id={$_REQUEST['id']}";
    $result = sqlsrv_query($connection, $query);
    echo '<pre>';
    var_dump($_REQUEST);
    echo '</pre>';

    if($row=sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)){
        echo "<h1>Обновить преподавателя</h1>";
        echo "<form action=\"teacher_update.php\" method=\"post\">";
        echo "<input type=\"text\" hidden   id=\"teacher_id\" name=\"teacher_id\" value=\"{$row['teacher_id']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_last_name\" name=\"teacher_last_name\" placeholder=\"Фамилия\" value=\"{$row['last_name']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_first_name\" name=\"teacher_first_name\" placeholder=\"Имя\" value=\"{$row['first_name']}\">";
        echo "<input type=\"text\" disabled id=\"teacher_middle_name\" name=\"teacher_middle_name\" placeholder=\"Отчество\" value=\"{$row['middle_name']}\">";
        echo "<input type=\"date\" disabled id=\"birth_date\" name=\"teacher_birth_date\" placeholder=\"Дата рождения\" value=\"{$row['birth_date']->format('Y-m-d')}\">";
        echo "<input type=\"date\" required id=\"work_since\" name=\"teacher_work_since\" placeholder=\"С нами c\" value=\"{$row['work_since']->format('Y-m-d')}\">";
        echo "<input type=\"submit\" value=\"Исправить\">";
        echo '</form>';
    
    echo '<pre>';
    print_r($row);
    print_r($_REQUEST);
    echo '</pre>';
    }

sqlsrv_close($connection);

?>
