<?php
$src_filename = __DIR__ . "/files/201 RAW.txt";
//echo file_exists($filename);
//$src_file = fopen($src_filename, 'r');
$content = file($src_filename);
echo '<pre>';
print_r($content);
echo '</pre>';
//fclose($src_file);

//*****************************
//$IPs	= array_keys($content);
//$MACs	= array_values($content);
$IPs	= [];
$MACs	= [];
for($i=0; $i < count($content); $i++)
{
	$subs = explode(' ',$content[$i]);
	$IP = $subs[array_key_first($subs)];
	$MAC = $subs[array_key_last($subs)];
	$MAC = str_replace("\n", "", $MAC);

	echo '<pre>';
	//print_r($subs);
	echo "$MAC\t$IP";
	//echo $MAC . $IP . '<br>';
	echo '</pre><hr>';
	$IPs[] = $IP;
	$MACs[] = $MAC;
}

echo '<pre>';
print_r($IPs);
print_r($MACs);
echo '</pre>';

//*****************************

$dst_filename = __DIR__ . '/files/201.WAL';
$dst_file = fopen($dst_filename, 'w');

for($i=0; $i < count($MACs); $i++)
{
	fwrite($dst_file, "{$MACs[$i]}\t{$IPs[$i]}\n");
}

fclose($dst_file);

//*****************************

$wal_filename = __DIR__ . '/files/201 WAL.txt';
//$wal_file = fopen($wal_filename, 'r');
$content = file($wal_filename);
echo '<table border cellspacing="0">';
echo '<tr>';
	echo '<th>';
		echo 'MAC adress:';
	echo '</th>';
	echo '<th>';
		echo 'IP adress:';
	echo '</th>';

		for($i=0; $i<count($content); $i++)
		{
			echo '<tr>';
			echo '<td>';
				echo explode("\t", $content[$i])[0];
			echo '</td>';
			echo '<td>';
				echo explode("\t", $content[$i])[array_key_last(explode("\t", $content[$i]))];
			echo '</td>';
			echo '</tr>';
		}

echo '</tr>';
echo '</table>';

//fclose($wal_file);

?>