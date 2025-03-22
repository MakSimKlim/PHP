<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
        <link rel="stylesheet" href="../css/style.css">
    <title>Disciplines</title>
</head>
<body>
    <h1>Дисциплины</h1>
    <h2>Преподаватели</h2>

<select onchange="getDisciplinesForTeacher(this.value)">
    <option value = "0" style="text-align:center;">
        --- Все преподаватели ---
    </option>
    <?php require_once __DIR__ . '/get_teachers_to_combo_box.php'?>
</select>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Наименование дисциплины</th>
            <th>Количество уроков</th>
            <th>Подробности</th>
        </tr>
    </thead>
    <tbody id="table-disciplines">
        <?php require_once __DIR__ . '/get_disciplines.php'?>
    </tbody>
</table>

<div id="disciplines-count"></div>


<script>
    function getDisciplinesForTeacher(id)
    {
        //console.log(id);
        let request = new XMLHttpRequest();
        request.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            document.getElementById("table-disciplines").innerHTML = this.responseText;
            console.log(this.responseText);
            console.table(this.responseText);
            // Подсчитываем количество строк в таблице
            const rows = document.querySelectorAll("#table-disciplines tr");
            const count = rows.length;

            // Обновляем текст с количеством преподавателей
            document.getElementById("disciplines-count").textContent = `Количество дисциплин: ${count}`;

        };
        request.open("GET", "get_disciplines_for_teacher.php?id="+id, true);
        request.send();
    }
</script>

</body>
</html>

