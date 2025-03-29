<?php
require_once __DIR__ . '/connection.php';

echo '<pre>';
print_r($_POST);
//$query ="UPDATE Teachers SET work_since = N'{$_POST['teacher_work_since']}' WHERE teacher_id={$_POST['teacher_id']}";
$query ="UPDATE Teachers SET work_since = ? WHERE teacher_id=?";
$values = array($_POST['teacher_work_since'], $_POST['teacher_id']);
$stmt = sqlsrv_query($connection, $query, $values);
var_dump($stmt);
echo '</pre>';





sqlsrv_close($connection);
?>