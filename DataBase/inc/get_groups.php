<?php
//echo '<tr>';
//echo '<td>';
//echo 'Здесь будет информация о группах';
//echo '</td>';
//echo '</tr>';

$server_name = "EVEREST";
//$username = "PHP";
//$password = "111";
//$db_name = "PD_212";
$connection_info = array("Database"=>"PD_212", "UID"=>"PHP", "PWD"=>"111", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

//echo '<pre>';
//var_dump($connection);
//echo '</pre>';

$query = "SELECT group_id, group_name, direction_name FROM Groups, Directions WHERE direction=direction_id;";
$result = sqlsrv_query($connection, $query);

//echo '<pre>';
//var_dump($result);
//echo '</pre>';

while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
{
	echo '<tr>';

	echo '<td>';
	echo $row['group_id'];
	echo '</td>';

	echo '<td>';
	echo $row['group_name'];
	echo '</td>';

	echo '<td>';
	echo $row['direction_name'];
	echo '</td>';



	echo '</tr>';
}


sqlsrv_close($connection);
?>