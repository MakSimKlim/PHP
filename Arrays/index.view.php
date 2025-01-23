<DOCTYPE HTML>
<lang="ru">
<header>
	<meta encoding="UTF-8">
	<title><?= $title; ?></title>
</header>
<body>
	<h1><?= $title; ?></h1>

	<!--<?PHP
		echo '<hr>';
		for($i=0; $i<count($array1); $i++)
			echo "$array1[$i]\t";
		echo '<hr>';
	?>

	<pre><?=
		var_dump($array0);		
		var_dump($array1);	
		$array2['12.33'] = 8.9;
		var_dump($array2);
		unset($array2[4]);
		print_r ($array2);

		foreach($array as $iterator)
		{
			echo "$iterator\t";
		}
		echo '<br>';
		foreach($array2 as $iterator)
		{
			echo "$iterator\t";
		}
		echo '<br>';
		foreach($array2 as $key => $value)
		{
			echo "array2[$key]:\t$value;\n";
		}
	?>
	</pre>

	<hr>
	<pre><?=		
		print_r($distance_to_sun, true);
		$distance_to_sun['Earth'];
	?>
	</pre>

	<hr>
	<pre>
	<?PHP
		//var_dump($array2D);
		//print_r($array2D);
		foreach($array2D as $iterator)
		{
			foreach($iterator as $iterator)
			{
				echo "$iterator\t";
			}
			echo '<br>';
		}
	?>
	</pre>
	<hr>

	<pre><?PHP
		echo "Array of 5 random elements: ";
		echo '<br>';
		// Заполняем пустой массив пятью случайными числами
		for ($i = 0; $i < 5; $i++) 
		{
			$array_random5[] = rand(25, 30); // Добавляем случайное число от 25 до 30
		}

		// Находим сумму элементов массива
		$sum = array_sum($array_random5);

		// Находим среднее арифметическое
		$average = $sum / count($array_random5);
		
		// Находим минимальное значение в массиве
		$minValue = min($array_random5);

		// Находим максимальное значение в массиве
		$maxValue = max($array_random5);

		// Выводим массив, сумму, среднее арифметическое, min, max
		print_r($array_random5);
		echo "Sum: " . $sum . "\n";
		echo "Arithmetic average: " . $average . "\n";
		echo "Minimum value: " . $minValue . "\n";
		echo "Maximum value: " . $maxValue . "\n";

	?>
	</pre>
	

	<pre><?PHP
		echo "Array of 10 random elements: ";
		echo '<br>';
		// Заполняем пустой массив десятью случайными числами
		for ($i = 0; $i < 10; $i++) 
		{
			$array_random10[] = rand(25, 30); // Добавляем случайное число от 25 до 30
		}
		// Считаем количество повторений каждого значения
		$counts = array_count_values($array_random10);

		// Находим повторяющиеся значения
		$duplicates = array_filter($counts, function($count) 
										{
											return $count > 1;
										}
								   );

		// Выводим массив, повторяющиеся значения и их количество повторений
		print_r($array_random10);
		echo "Repeated values and number of repetitions:\n";
		foreach ($duplicates as $value => $count) 
		{
			echo $value . " repeat " . $count . " times\n";
		}
		

	?>
	</pre>

	<?php
		
		array_unshift($array1,2);
		array_unshift($array1,1);
		$array1[] = 340;
		array_push($array1,550);
		print_array($array1);
		$keys = array_keys($array1);
		print_array($keys);
		echo array_key_exists(5, $array1);
		echo in_array(13.21, $array1);

		array_pop($array1);
		array_pop($array1);
		array_shift($array1);
		array_shift($array1);
		print_array($array1);

		echo '<hr>';
		$array0 = array_merge($array1, $array2);
		print_array($array1);
		print_array($array2);
		print_array($array0);
		echo '<hr>';
		$array_spread = [...$array, ...$array0];
		print_array($array_spread);
		echo '<hr>';
		echo '<h3>Arrays and variables</h3>';
		//$Mercury = $distance_to_sun['Mercury'];
		//$Venus = $distance_to_sun['Venus'];
		//$Earth = $distance_to_sun['Earth'];

		list
		(
			'Mercury' => $Mercury,
			'Venus' => $Venus,
			'Earth' => $Earth,
		) = $distance_to_sun;
		echo "$Mercury<br>";
		echo "$Venus<br>";
		echo "$Earth<br>";

		//Деструктуризация
		[$zero, $first, $second, $third] = $array1;
		echo "$zero<br>";
		echo "$first<br>";
		echo "$second<br>";
		echo "$third<br>";

		[
			'Mars' => $Mars,
			'Jupiter' => $Jupiter
		] = $distance_to_sun;

		echo "$Mars<br>";
		echo "$Jupiter<br>";

		[,,,$var1, $var2] = $array1;
		echo "$var1<br>";
		echo "$var2<br>";
	?>-->

	<!--
			Функции сортировки массивов
	sort(); – сортирует массив в порядке возрастания
	rsort(); – в порядке убывания
	ksort(); – сортирует ключи ассоциативного массива

	-->

	<?php
	rsort($array);
	print_array($array);
	?>


</body>