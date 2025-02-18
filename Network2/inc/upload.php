<?php
require_once '../functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file']) && $_FILES['file']['type'] === 'text/plain') {
        $uploadDir = '../files/';
        $sourceFile = $uploadDir . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $sourceFile)) {
            echo 'Файл успешно загружен.<br>';

            // Создание двух новых файлов
            $filenames = get_filenames($sourceFile);

            $IPs = [];
            $MACs = [];
            read_adresses_from_file($filenames['source'], $IPs, $MACs);
            write_adresses_from_file($filenames['WAL'], $IPs, $MACs);  // Сохранение в ready файл
            write_adresses_from_file($filenames['DHCP'], $IPs, $MACs); // Сохранение в dhcpd файл
            write_adresses_from_file($filenames[' ready.txt'], $IPs, $MACs); // Сохранение в txt файл

            // Вывод содержимого новых файлов на страницу
            echo '<h3>Содержимое файла ' . basename($filenames[' ready.txt']) . ' (таблица):</h3>';
            print_table_from_file($filenames[' ready.txt']);

            echo '<h3>Содержимое файла ' . basename($filenames['DHCP']) . ':</h3>';
            echo '<pre>' . htmlspecialchars(file_get_contents($filenames['DHCP'])) . '</pre>';
        } else {
            echo 'Загрузка файла не удалась.';
        }
    } else {
        echo 'Разрешена загрузка только .txt файлов.';
    }
}
?>
