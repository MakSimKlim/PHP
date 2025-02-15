<?php
require_once 'functions.php';

//функция вынесенная в functions.php
$filenames = get_filenames(__DIR__ . '/files/201 RAW.txt');

$IPs	= [];
$MACs	= [];

//функция вынесенная в functions.php
read_adresses_from_file($filenames['source'], $IPs, $MACs);
//read_adresses_from_file(__DIR__ . '/files/201 RAW.txt', $IPs, $MACs);

echo '<pre>';
print_r($filenames);
print_r($IPs);
print_r($MACs);
echo '</pre>';

//функция вынесенная в functions.php
write_adresses_from_file($filenames['WAL'], $IPs, $MACs);
//write_adresses_from_file(__DIR__ . '/files/201.WAL', $IPs, $MACs);

//функция вынесенная в functions.php
print_table_from_file($filenames['WAL']);
//print_table_from_file(__DIR__ . '/files/201.WAL');


?>