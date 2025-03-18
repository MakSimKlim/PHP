<?php
//$server_name = "DELL"; // Домашний сервер на буке
//$server_name = "VANYACOMP"; // Домашний сервер
$server_name = "EVEREST"; // Сервер на работе
$connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");
$connection = sqlsrv_connect($server_name, $connection_info);

//var_dump($connection);

?>