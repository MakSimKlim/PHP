<?php require_once __DIR__ . '/get_discipline.php';?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
	<link rel="stylesheet" href="../css/style.css">
    <title><?=$row['discipline_name']?></title>
</head>
<body>
    <h1><?=$row['discipline_name']?></h1>
    <div>Количество занятий: <?=$row['number_of_lessons']?></div>
    <div>ID: <span id="discipline-id"><?=$row['discipline_id']?></span></div>
    <pre>
	<?php print_r($row)?>
    </pre>
    <h3>Преподаватели</h3>;
    <div class="table-with-combo" style="display:flex;justify-content:space-between;">
		<div>
			<table>
			<thead>
			</thead>
			<tbody id="table-teachers">
			<?php require_once __DIR__ . '/../Teachers/get_teachers_for_discipline.php';?>
			</tbody>
			</table>
		</div>

		<div style="margin-right:25px;display:block;text-align:right;">
			<select id="selected-teacher">
			<option value="0">
			--- Добавить преподавателя ---
			</option>
			<?php require_once __DIR__ . "/../Teachers/get_teachers_to_combo_box.php"?>
			</select>
			<br>
			<input type="button" value="Добавить" style="margin-top:10px;" onclick="addTeacherForDiscipline()">
		</div>
	</div>
	<div id="debug"></div>
	<script>
		function addTeacherForDiscipline()
		{
			let teacher_id		= document.getElementById("selected-teacher").value;
			let discipline_id	= document.getElementById("discipline-id").innerText;
			document.getElementById("debug").innerHTML = `disciplineID:${discipline_id};teacherID:${teacher_id}`;
			//alert(`disciplineID:${discipline_id};teacherID:${teacher_id}`);

			let request = new XMLHttpRequest();
			request.onreadystatechange = function ()
			{
				//document.getElementById("response").innerHTML = this.responseText;
				getTeachersForDiscipline();
			}
			request.open("GET", `set_teacher_for_discipline.php?teacher_id=${teacher_id}&discipline_id=${discipline_id}`, true);
			request.send();
		}
		    function getTeachersForDiscipline()
			{
			    let discipline_id = document.getElementById("discipline-id").innerText;
				let request = new XMLHttpRequest();
				request.onreadystatechange = function()
				{
					document.getElementById("table-teachers").innerHTML = this.responseText;
				}
				request.open("GET", `../Teachers/get_teachers_for_discipline.php?id=${discipline_id}`,true);
				request.send();

			}

	</script>

</body>
</html>