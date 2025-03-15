<?php
function get_teachers_for_discipline($id)
{
$server_name = "VANYACOMP";
$connection_info = array("UID"=>"PHP", "PWD"=>"111", "CharacterSet" => "UTF-8");

$connection = sqlsrv_connect($server_name, $connection_info);

$query = "SELECT	
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, middle_name) AS 'full_name',
		birth_date,
		DATEDIFF(DAY, work_since, GETDATE())/365			AS 'experience',
		discipline_name
FROM	Disciplines
JOIN	TeachersDisciplinesRelation	ON	(discipline=discipline_id)
JOIN	Teachers					ON	(teacher=teacher_id)
WHERE	discipline_id = {$id}";

	$result = $sqlsrv_query($connection, $query);

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
		echo $row['students_count'];
		echo '</td>';
	
		echo '<td>';
		echo $row['direction_name'];
		echo '</td>';



		echo '</tr>';

	}

sqlsrv_close($connection);

?>