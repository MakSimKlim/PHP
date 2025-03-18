﻿<?php
// функция подключения серверов к базе данных в автоматическом режиме (вариант1)

function connectServersToDataBase() 
{
    // Список серверов для подключения
    $servers =array(
        "DELL",         // Домашний сервер на буке
        "VANYACOMP",    // Домашний сервер
        "EVEREST"       // Сервер на работе
    );

    // Перебираем серверы и пытаемся подключиться
    foreach ($servers as $server_name) 
    {
        /////////////////////////////////////////////////////////////////////////
        // Проверяем, доступен ли сервер
        $ip = gethostbyname($server_name); // 
        if ($ip === $server_name) 
        {
            echo "Сервер $server_name не найден в сети.\n";
            continue;
        }
        /*
        gethostbyname - встроенная функция PHP, 
        которая принимает имя хоста
        и пытается разрешить его в IP-адрес
        Если имя сервера успешно разрешено в IP-адрес, 
        $ip будет содержать этот IP-адрес 
        (например, "192.168.1.10"). 
        Если имя сервера не может быть разрешено, функция вернет 
        переданное имя сервера без изменений (например, "DELL").
        В этом случае условие $ip === $server_name будет истинным (true).
        Если сервер не найден, continue прерывает текущую итерацию цикла 
        и переходит к следующему серверу в массиве $servers.
        */
        ////////////////////////////////////////////////////////////////////////

        $connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");
    
        $connection = sqlsrv_connect($server_name, $connection_info);
        
        // Если подключение успешно, возвращаем соединение
        if ($connection !== false) 
        {
            return $connection;
        }
    }

    // Если ни один сервер не доступен, возвращаем false или выбрасываем исключение
    return false;
}

/*
//Вариант выбора сервера для подключения к базе данных в ручном режиме
function connectServersToDataBase() 
{
    //$server_name = "DELL"; // Домашний сервер на буке
    //$server_name = "VANYACOMP"; // Домашний сервер
    $server_name = "EVEREST"; // Сервер на работе
    
    $connection_info = array("UID"=>"PHP", "PWD"=>"111", "DataBase"=>"PD_212", "CharacterSet" => "UTF-8");
    
    $connection = sqlsrv_connect($server_name, $connection_info);
    
    return $connection;

}
*/





?>