<?PHP
	$title ='Arrays';

	$array=[0, 1, 1, 2, 3, 5, 8];

	$array0 = [];
	$array1 = array(3,5,8,13.21); // объ€вление массива через €вный вызов конструктора
	$array2 = [34,55,89,144];// объ€вление массива через не€вный вызов конструктора

	$distance_to_sun['Mercury'] = 46000000;
	$distance_to_sun['Venus'] = 108000000;
	$distance_to_sun['Earth'] = 149000000;

	$array2D = 
	[
		[0,1,1,2],
		[3,5,8,13,21],
		[34,55,89]
	];


	require 'index.view.php';
?>