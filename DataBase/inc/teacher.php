<?php
require_once __DIR__ . '/connection.php';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

//function get_teacher_from_base($id)
{

	//$query = "SELECT * FROM Teachers WHERE teacher_id={$_REQUEST['id']}";
	$query = "
SELECT *
FROM Teachers t, TeachersDisciplinesRelation td, Disciplines d
WHERE t.teacher_id = td.teacher 
AND td.discipline = d.discipline_id
AND t.teacher_id = {$_REQUEST['id']}";

	$result = sqlsrv_query($connection, $query);
	echo '<pre>';
	//print_r($result);
	echo '</pre>';
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo '<pre>';
		//print_r($row);
		echo '</pre>';

		echo "<h1>{$row['last_name']}{$row['first_name']}{$row['middle_name']}</h1>";
		echo "Дата рождения: {$row['birth_date']->format('d.m.Y')}";
		
		echo '<pre>';
		//$start_date=$row['work_since']->format('Y-m-d');
		//$end_date=date('Y.m.d');
		//var_dump($start_date);
		//var_dump($end_date);
		//
		//
		//$interval = DateInterval::createFromDateString('1 year');
		//var_dump($interval);

		//$daterange = new DatePeriod($start_date, $interval, $end_date);
		$daterange = date_diff(date_create($row['work_since']->format('d.m.Y')), date_create());
		//var_dump($daterange);
		echo '</pre>';

		echo "Опыт преподавания: {$daterange->format('%y years')}";

		//echo "<h4>Дисциплины, которые преподает:{$row['discipline_name']}</h4>";
		echo "<h4>Дисциплины, которые преподает:</h4><ul>";
		do 
		{
		    // Вывод каждой дисциплины в виде списка
		    echo "<li>{$row['discipline_name']}</li>";
		} 
		while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC));
		echo "</ul>";






	}
}
?>