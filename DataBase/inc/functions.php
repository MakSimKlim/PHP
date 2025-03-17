<?php
// функция подключения серверов к базе данных
function connectServersToDataBase() {
    // Список серверов для подключения
    $servers = array("DELL", "EVEREST", "VANYACOMP");
    $connection = null;

    // Перебор серверов для установления соединения с базой данных
    foreach ($servers as $server_name) {
        $connection_info = array(
            "UID" => "PHP",
            "PWD" => "111",
            "DataBase" => "PD_212",
            "CharacterSet" => "UTF-8"
        );
        $connection = sqlsrv_connect($server_name, $connection_info);
        if ($connection) {
            echo '<br>';
            echo "Соединение успешно установлено с сервером: " . $server_name . "<br>";
            break; // Прекращаем цикл, если удалось подключиться
        } else {
            echo '<br>';
            echo "Не удалось подключиться к серверу: " . $server_name . "<br>";
        }
    }

    // Если соединение не удалось установить
    if (!$connection) {
        die("Не удалось подключиться ни к одному серверу.");
    }

    return $connection;
}





?>