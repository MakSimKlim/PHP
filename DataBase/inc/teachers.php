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
    <select>
        <!---->
        <option value = "0" style="text-align:center;">
            --- Все дисциплины ---
        </option>
        <?php require_once __DIR__ . '/get_disciplines_to_combo_box.php'?>
    </select>
    <table>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Дата рождения</th>
            <th>Опыт работы</th>
        </tr>
        <?php require_once __DIR__ . '/get_teachers.php' ?>
    </table>
</body>
</html>