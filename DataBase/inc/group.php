<?php
require_once __DIR__ . '/connection.php';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

//function get_teacher_from_base($id)
{

	$query = 
"SELECT group_id,group_name,direction_name,COUNT(stud_id) AS students_count
FROM Students
RIGHT JOIN Groups ON ([group]=group_id)
JOIN Directions ON (direction=direction_id)
WHERE group_id={$_REQUEST['id']}
GROUP BY group_id,group_name,direction_name";

	$result = sqlsrv_query($connection, $query);
	echo '<pre>';
	//print_r($result);
	echo '</pre>';
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo '<pre>';
		//print_r($row);
		echo '</pre>';

		echo "<h1>{$row['group_name']}</h1>";
		echo "<h3>{$row['direction_name']}</h3>";
		echo "<h3>ID:{$row['group_id']}</h3>";
		echo "<h3>Кол-во студентов:{$row['students_count']}</h3>";
		
		echo '<pre>';
		echo '</pre>';


	}
}
?>