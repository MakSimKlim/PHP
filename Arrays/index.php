<?PHP
	$title ='Arrays';

	$array=[0, 1, 1, 2, 3, 5, 8];

	$array0 = [];
	$array1 = array(3,5,8,13.21, 34.55); // объявление массива через явный вызов конструктора
	$array2 = [34,55,89,144];// объявление массива через неявный вызов конструктора

	//$distance_to_sun['Mercury'] = 46000000;
	//$distance_to_sun['Venus'] = 108000000;
	//$distance_to_sun['Earth'] = 149000000;
	$distance_to_sun =
	[
		'Mercury' => 46000000,
		'Venus' => 108000000,
		'Earth' => 149000000,
		'Mars' => 249000000,
		'Jupiter' => 777000000,
		'Saturn' => 1430000000
	];

	$array2D = 
	[
		[0,1,1,2],
		[3,5,8,13,21],
		[34,55,89]
	];

	$array_random5 = []; // создание изначально пустого массива 
						//для последующего заполнения рандомными числами
	$array_random10 = []; // создание изначально пустого массива 
						//для последующего заполнения рандомными числами

	function print_array($array)
	{
		echo '<pre>';
		//for($i=0;$i<count($array);$i++)
		//	echo "$array[$i]\t";
		foreach($array as $iterator)
			echo "$iterator\t";
		echo '<pre>'; 
	}

	function print_array_pre($array)
	{
		echo '<pre>';
		print_r($array);
		echo '<pre>';
	}

	require 'index.view.php';
?>