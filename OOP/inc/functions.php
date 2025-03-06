<?php
require_once __DIR__ . '/inheritance.php';

function print_group($group)
{
	echo '<hr>';

	for($i=0;$i<count($group);$i++)
	{
		echo $group[$i] . '<br>';
	}
	echo '<hr>';

}

function table_group($group)
{
	echo '<table>';
	echo '<tr>';
	echo '<th>First name</th><th>Last name</th><th>Age</th><th>Speciality</th><th>Info</th>';
	echo '</tr>';
	for($i=0; $i < count($group); $i++)
	{
		echo '<tr>';
		echo "<td>{$group[$i]->get_first_name()}</td>";
		echo "<td>{$group[$i]->get_last_name()}</td>";
		echo "<td>{$group[$i]->get_age()}</td>";
		echo "<td>{$group[$i]->get_speciality()}</td>";
		echo '<td>';
		echo $group[$i]->info();
		echo '</td>';
		echo '</tr>';
	}
	echo '</table>';
}

function save($group, $filename)
{
	$file = fopen($filename, "w");
	for($i = 0; $i < count($group); $i++)
	{
		fwrite($file, $group[$i]->csv() . "\n");
	}
	fclose($file);

}
function load($filename)
{
	$group =[];
	$file = fopen($filename, 'r');

	while(!feof($file))
	{
		$line = fgets($file);
		if($line==null)continue;
		$splitted = explode(":", $line);
		//print_r($splitted);
		//var_dump(human_factory($splitted[0])->init($splitted[1]));
		//echo $member = human_factory($splitted[0])->init($splitted[1]);
		//echo $member->init($line);
		//echo $member;
		$group[] = human_factory($splitted[0])->init($splitted[1]);
		//echo $line . "<hr>";
	}

	fclose($file);
	//print_r($group);
	return $group;
}

function human_factory($type)
{
	switch($type)
	{
		case "Student":		return new Student();	break;
		case "Graduate":	return new Graduate();	break;
		case "Teacher":		return new Teacher();	break;
	}
}

?>