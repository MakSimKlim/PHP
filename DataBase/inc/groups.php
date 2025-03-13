<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
</head>
<body>
    <h1>Groups</h1>
    <table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Количество студентов</th>
        <th>Направление</th>
    </tr>
    <?php require_once __DIR__ . '/get_groups.php'; ?>
    </table>
</body>
</html>