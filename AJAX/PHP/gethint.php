<?php
	$names[] = 'Alex';
	$names[] = 'Max';
	$names[] = 'Artem';
	$names[] = 'Kirsan';
	$names[] = 'Sagid';
	$names[] = 'Andrew';

	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';

	$query = $_REQUEST['q'];
	$hint = "";

	if($query !== "")
	{
		$query = strtolower($query);
		foreach($names as $name)
		{
			if(stristr($name, $query) !== false)
			{
				if($hint === "")$hint = $name;
				else $hint .= ", $name";
			}
		}
	}
	echo $hint;
?>