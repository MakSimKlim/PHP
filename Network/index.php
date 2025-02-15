<?php
$filename = __DIR__ . "/files/201 RAW.txt";
//echo file_exists($filename);
$file = fopen($filename, 'r');
$content = file($filename);
echo '<pre>';
print_r($content);
echo '</pre>';
fclose($file);
?>