<?php
//echo '<pre>';
//print_r($_REQUEST);
//echo '</pre>';

require_once __DIR__ . '/connection.php';
$query	= "INSERT TeachersDisciplinesRelation(teacher,discipline) VALUES(?,?)";
$values = array
(
	$_REQUEST['teacher_id'],
	$_REQUEST['discipline_id']
);

$stmt = sqlsrv_query($connection, $query, $values);
//echo '<pre>';
//var_dump($stmt);
//echo '</pre>';


$_REQUEST['id'] = $_REQUEST['discipline_id'];
require_once __DIR__ . "/get_teacher_for_discipline.php";
//require_once __DIR__ . "/get_teacher_for_discipline.php?id={$_REQUEST['discipline_id']}";
//sqlsrv_close($connection);
?>