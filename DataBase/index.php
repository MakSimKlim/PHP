<?php
$server_name = "EVEREST";
//$connection_info = array("Database" => "PD_212");
$connection_info = array("Database" => "PD_212", "UID"=>"EVEREST", "PWD" => "111");

$connection = sqlsrv_connect($server_name, $connection_info);
//$connection = sqlsrv_connect($server_name, array());

echo '<pre>';
echo print_r(sqlsrv_errors(), true); // Вывод ошибок, если подключение не удалось
echo '</pre>';


?>