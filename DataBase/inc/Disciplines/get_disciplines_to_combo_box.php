<?php

//$server_name = "DELL"; // Домашний сервер на буке
//$server_name = "VANYACOMP"; // Домашний сервер
//$server_name = "EVEREST"; // Сервер на работе

//$connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");

//$connection = sqlsrv_connect($server_name, $connection_info);

require_once __DIR__ . '/../connection.php';

$query = "SELECT discipline_id, discipline_name FROM disciplines";
$result = sqlsrv_query($connection, $query);

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
	echo "<option value=\"{$row["discipline_id"]}\">";
	echo $row["discipline_name"];
	echo '</option>';
}

sqlsrv_close($connection);

?>