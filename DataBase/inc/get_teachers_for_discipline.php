<?php

//session_start();
$id=$_REQUEST["id"];
//echo '<pre>';
//var_dump($id);
//print_r($_REQUEST);
//echo '</pre>';

if($id>0)

//function get_teachers_for_discipline($id)
{
/*$server_name = "DELL"; // Домашний сервер на буке
//$server_name = "VANYACOMP"; // Домашний сервер
//$server_name = "EVEREST"; // Сервер на работе
$connection_info = array("DataBase" => "PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);*/

require_once __DIR__ . '/functions.php'; // Подключаем файл с функцией

$connection = connectServersToDataBase();// функция подключения серверов к базе данных

//echo '<pre>';
//var_dump($connection);
//echo '</pre>';

$query = "SELECT	
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		birth_date,
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience',
		discipline_name
FROM	Disciplines
JOIN	TeachersDisciplinesRelation	ON	(discipline=discipline_id)
JOIN	Teachers					ON	(teacher=teacher_id)
WHERE	discipline_id = {$id}";

	$result = sqlsrv_query($connection, $query);

	//echo '<pre>';
	//var_dump($result);
	//echo '</pre>';

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo '<tr>';

		echo '<td>';
		echo $row["teacher_id"];
		echo '</td>';

		echo '<td>';
		echo $row["full_name"];
		echo '</td>';

		echo '<td>';
		echo $row["birth_date"]->format('d.m.Y');
		echo '</td>';

		echo '<td>';
		echo $row["experience"];
		echo '</td>';
		echo '</tr>';
	}
	sqlsrv_close($connection);
}
else
{
	require_once __DIR__ . '/get_teachers.php';
}
?>