<?php

$id=$_REQUEST["id"];

//echo '<pre>';
//var_dump($id);
//print_r($_REQUEST);
//echo '</pre>';

if($id>0)
{

//$server_name = "DELL"; // Домашний сервер на буке
$server_name = "VANYACOMP"; // Домашний сервер
//$server_name = "EVEREST"; // Сервер на работе
$connection_info = array("DataBase" => "PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

$query = "SELECT	
		discipline_id,
		discipline_name,
		number_of_lessons,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name'
FROM	Teachers
JOIN	TeachersDisciplinesRelation	ON	(teacher=teacher_id)
JOIN	Disciplines					ON	(discipline=discipline_id)
WHERE	teacher_id = {$id}";

	$result = sqlsrv_query($connection, $query);

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{	echo '<tr>';
	
		echo '<td>';
		echo $row["discipline_id"];
		echo '</td>';
	
		echo '<td>';
		echo $row["discipline_name"];
		echo '</td>';
	
		echo '<td>';
		echo $row["number_of_lessons"];
		echo '</td>';
	
		echo '</tr>';
	}
	sqlsrv_close($connection);
}
else
{
	require_once __DIR__ . '/get_disciplines.php';
}


?>