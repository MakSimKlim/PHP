<?php
function get_filenames(string $filename):array
{
	$splitted_name = explode("/", $filename);
	$name = $splitted_name[array_key_last($splitted_name)];
	echo $name;
	$number = (int)$name;
	echo $filename;
	echo "<h1>{$number}</h1>";
	$filenames = 
		[
		"source"		=> $filename,	
		"WAL"			=> __DIR__ . "/files/{$number}.WAL",
		"DHCP"			=> __DIR__ . "/files/{$number}.dhcpd",
		"ready.txt"	=> __DIR__ . "/files/{$number}ready.txt",
		];
		return $filenames;
}

//&$IPs и &$MACs передаются по ссылке, поэтому &
function read_adresses_from_file(string $filename, array &$IPs, array &$MACs): void
{
	$src_filename = $filename;
	//echo file_exists($filename);
	//$src_file = fopen($src_filename, 'r');
	$content = file($src_filename);
	echo '<pre>';
	print_r($content);
	echo '</pre>';
	//fclose($src_file);

	//*****************************

	for($i=0; $i < count($content); $i++)
	{
		//$subs = explode(' ',$content[$i]);
		//$IP = $subs[array_key_first($subs)];
		//$MAC = $subs[array_key_last($subs)];
		//$MAC = str_replace("\n", "", $MAC);
		$subs = preg_split('/\s+/', trim($content[$i])); // Убираем лишние пробелы и символы новой строки
        $IP = $subs[0];
        $MAC = end($subs);
        $IPs[] = $IP;
        $MACs[] = $MAC;

		echo '<pre>';
		//print_r($subs);
		echo "$MAC\t$IP";
		//echo $MAC . $IP . '<br>';
		echo '</pre><hr>';
		$IPs[] = $IP;
		$MACs[] = $MAC;
	}
}
//$IPs и $MACs не передаются по ссылке, поэтому & отсутствует
function write_adresses_from_file(string $filename, array $IPs, array $MACs): void
{
	$dst_filename = $filename;
	$dst_file = fopen($dst_filename, 'w');

	for($i=0; $i < count($MACs); $i++)
	{
		fwrite($dst_file, "{$MACs[$i]}\t{$IPs[$i]}\r\n");
	}

	fclose($dst_file);
}

function print_table_from_file(string $filename): void
{
	$wal_filename = $filename;
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
}

// Новая функция для записи в DHCP файл
//function write_dhcpd_file(string $filename, array $IPs, array $MACs): void
//{
//    $dst_file = fopen($filename, 'w');
//
//    for ($i = 0; i < count($MACs); $i++) {
//        fwrite($dst_file, "{$MACs[$i]}\t{$IPs[$i]}\n");
//    }
//
//    fclose($dst_file);
//}
function write_dhcpd_file(string $filename, array $IPs, array $MACs, string $base_name): void
{
    $dst_file = fopen($filename, 'w');

    for ($i = 0; $i < count($MACs); $i++) {
        $host_num = $i + 1;
        $host_entry = "host {$base_name}-{$host_num}\n" .
                      "{\n" .
                      "\thardware ethernet\t{$MACs[$i]};\n" .
                      "\tfixed-address\t\t{$IPs[$i]};\n" .
                      "}\n\n";
        fwrite($dst_file, $host_entry);
    }

    fclose($dst_file);
}

?>