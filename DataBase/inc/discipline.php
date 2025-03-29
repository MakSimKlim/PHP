<?php
//require_once __DIR__ . '/header.php';
require_once __DIR__ . '/connection.php';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

//function get_teacher_from_base($id)
{
	$query = "SELECT * FROM Disciplines WHERE discipline_id={$_REQUEST['id']}";	

	$result = sqlsrv_query($connection, $query);
	echo '<pre>';
	//print_r($result);
	echo '</pre>';
	if($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo '<pre>';
		//print_r($row);
		echo '</pre>';
		echo "<h1>{$row['discipline_name']}</h1>";
		echo "Количество занятий: {$row['number_of_lessons']}";
		echo '<h3>Преподаватели:</h3>';
		echo '<div class="table-with-combo" style="display:flex;justify-content:space-between;">';
			echo '<div>';
				echo '<table>';
				echo '<thead>';
				echo '</thead>';
				echo '<tbody id="table-teachers">';
				require_once __DIR__ . '/get_teachers_for_discipline.php';
				echo '</tbody>';
				echo '</table>';
			echo '</div>';

			echo '<div style="margin-right:25px;display:block;text-align:right;">';
				echo '<select>';
				echo '<option value="0">';
				echo '--- Добавить преподавателя ---';
				echo '</option>';
				require_once __DIR__ . '/get_teachers_to_combo_box.php';
				echo '</select>';
				echo '<br>';
				echo '<input type="button" value="Добавить" style="margin-top:10px;">';
			echo '</div>';
		echo '</div>';
	}
	//require_once __DIR__ . '/footer.html';
}
?>