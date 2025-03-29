<?php

$id=$_REQUEST["id"];
//echo $_REQUEST;
if($id>0)
{
require_once __DIR__ . '/../connection.php';
require_once __DIR__ . '/../format_table.php';


$query = "SELECT	
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		CONVERT(VARCHAR(25),birth_date,121) AS 'birth_date',
		DATEDIFF(DAY, work_since, GETDATE())/365 AS 'experience'

FROM	Disciplines
JOIN	TeachersDisciplinesRelation	ON	(discipline=discipline_id)
JOIN	Teachers					ON	(teacher=teacher_id)
WHERE	discipline_id = {$id}";

	$result = sqlsrv_query($connection, $query);

	format_table($result);


	sqlsrv_close($connection);
}
else
{
	require_once __DIR__ . '/../Teachers/get_teachers.php';
}
?>