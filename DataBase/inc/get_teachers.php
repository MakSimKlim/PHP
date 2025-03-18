<?php
/*
//$server_name = "DELL"; // Домашний сервер на буке
//$server_name = "VANYACOMP"; // Домашний сервер
$server_name = "EVEREST"; // Сервер на работе

$connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);
*/
require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/format_table.php';

$query = "SELECT
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		CONVERT(VARCHAR(25),birth_date,121) AS 'birth_date',
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience'
FROM Teachers";

$result = sqlsrv_query($connection, $query);

format_table($result);

/*while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{	echo '<tr>';

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
}*/

sqlsrv_close($connection);

?>