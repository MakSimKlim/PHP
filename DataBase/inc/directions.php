<?php
$server_name = "EVEREST";
//$connection_info = array("Database" => "PD_212");
//$connection_info = array("Database" => "PD_212", "UID"=>"PHP", "PWD" => "111", "CharacterSet" => "UTF-8");
//$connection_info = array("Database" => "PD_212", "UID"=>"PHP", "PWD" => "111");
$connection_info = array("Database" => "PD_212", "UID"=>"PHP", "PWD" => "111", "CharacterSet" => "UTF-8");
//$connection_info = array("UID"=>"PHP", "PWD" => "111");

$connection = sqlsrv_connect($server_name, $connection_info);
//$connection = sqlsrv_connect($server_name, array());

var_dump($connection);

$query = "SELECT * FROM Directions;";
$results = sqlsrv_query($connection, $query);

//$results = $connection->query($query); //MySQL

//if($results->num_rows>0)
//{
	$row;
	echo '<table>';
	echo '<tr>';	
	echo '<th>';	
	echo 'ID';
	echo '</th>';
	echo '<th>';
	echo 'Направление обучения:';
	echo '</th>';
	
	echo '</tr>';
	
	while($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC))
	{
		//echo "direction_id:{$row["direction_id"]} - direction_name:{$row["direction_name"]};<br>";
		echo '<tr>';
		echo '<td>';
		echo $row["direction_id"];
		echo '</td>';
		echo '<td>';
		echo $row["direction_name"];
		echo '</td>';

		echo '<td>';
			echo '<pre>';
			var_dump($row);
			print_r($row);
			echo '</pre>';
		echo '</td>';

		echo '</tr>';	
	}
	echo '</table>';
//}

echo '<pre>';
//echo var_dump($connection); // Вывод ошибок, если подключение не удалось
var_dump($results);
print_r($results);
echo '</pre>';

echo '<pre>';
var_dump($row);
print_r($row);
echo '</pre>';


//echo '<pre>';
//echo print_r(sqlsrv_errors(), true); // Вывод ошибок, если подключение не удалось
//echo '</pre>';

sqlsrv_close($connection);
phpinfo();

?>