<?php

$id=$_REQUEST["id"];

if($id>0)
{

require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/format_table.php';


$query = "SELECT	
		discipline_id,
		discipline_name,
		number_of_lessons--,
		--FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name'
FROM	Teachers
JOIN	TeachersDisciplinesRelation	ON	(teacher=teacher_id)
JOIN	Disciplines					ON	(discipline=discipline_id)
WHERE	teacher_id = {$id}";

	$result = sqlsrv_query($connection, $query);

	format_table($result);

	sqlsrv_close($connection);
}
else
{
	require_once __DIR__ . '/get_disciplines.php';
}


?>