<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
    <title>Teachers</title>
</head>
<body>
    <h1>Преподаватели</h1>
    <h2>Дисциплины</h2>

    <select onchange="getTeachersForDiscipline(this.value)">
        <!--<option value="value">text</option>-->
        <option value = "0" style="text-align:center;">
            --- Все дисциплины ---
        </option>
        <?php require_once __DIR__ . '/get_disciplines_to_combo_box.php'?>
    </select>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Дата рождения</th>
                <th>Опыт работы</th>
                <th>Подробности</th>
            </tr>
        </thead>
        <tbody id="table-teachers">
                <?php require_once __DIR__ . '/get_teachers.php' ?>
        </tbody>

    </table>

<div id="teachers-count"></div>



    <script>
        function getTeachersForDiscipline(id)
        {
            //if(id>0)
            //{
                //console.log(id);
                let request = new XMLHttpRequest();
                request.onreadystatechange = function()
                {
                    if(this.readyState == 4 && this.status == 200)
                    //document.getElementById("table-teachers").append(this.responseText);
                    // Обновляем содержимое таблицы
                    document.getElementById("table-teachers").innerHTML = this.responseText;

                    // Подсчитываем количество строк в таблице
                    const rows = document.querySelectorAll("#table-teachers tr");
                    const count = rows.length;

                    // Обновляем текст с количеством преподавателей
                    document.getElementById("teachers-count").textContent = `Количество преподавателей: ${count}`;

                };
                    request.open("GET", "get_teachers_for_discipline.php?id="+id, true);
                    request.send();
            //}
        }

    </script>
</body>
</html>