﻿<?php

//$server_name = "DELL"; // Домашний сервер на буке
$server_name = "VANYACOMP"; // Домашний сервер
//$server_name = "EVEREST"; // Сервер на работе

$connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

$query =	"SELECT 
			teacher_id, 
			FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name' 
			--last_name 
FROM Teachers";

$result = sqlsrv_query($connection, $query);

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
	echo "<option value=\"{$row["teacher_id"]}\">";
	echo $row["full_name"];
	//echo $row["last_name"];
	echo '</option>';
}

sqlsrv_close($connection);


?>