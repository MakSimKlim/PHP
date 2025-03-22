<?php
require_once __DIR__ . '/connection.php';

echo '<pre>';
print_r ($_POST);
$date = getdate();
$date_string = "{$date['year']}-{$date['mon']}-{$date['mday']}";
var_dump($date_string);

/*
$query = "
INSERT Teachers	(last_name,first_name-middle_name,birth_date,work_since)
VALUES			
(
	N'{$_POST['teacher_last_name']}',
	N'{$_POST['teacher_first_name']}',
	N'{$_POST['teacher_middle_name']}',
	N'{$_POST['teacher_birth_date']}',
	N'{$date_string}'
)
";
echo $query;
$result = sqlsrv_query($connection, $query);
*/

$query = "INSERT Teachers(last_name,first_name-middle_name,birth_date,work_since) VALUES(?,?,?,?,?)";
$values = array
	(
		$_POST['teacher_last_name'],
		$_POST['teacher_first_name'],
		$_POST['teacher_middle_name'],
		$_POST['teacher_birth_date'],
		$date_string
	);
var_dump($values);

$stmt = sqlsrv_prepare($connection, $query, $values);

//var_dump($result);
var_dump($stmt);

echo '</pre>';

sqlsrv_close($connection);
?>