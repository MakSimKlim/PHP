﻿<?php

//Вариант выбора сервера для подключения к базе данных в ручном режиме
/*
//$server_name = "DELL"; // Домашний сервер на буке
$server_name = "VANYACOMP"; // Домашний сервер
//$server_name = "EVEREST"; // Сервер на работе

$connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);
*/

require_once __DIR__ . '/functions.php'; // Подключаем файл с функцией

$connection = connectServersToDataBase();// функция подключения серверов к базе данных

$query = "SELECT
		discipline_id,
		discipline_name,
		number_of_lessons
FROM Disciplines";


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


?>