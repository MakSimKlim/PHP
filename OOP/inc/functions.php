<?php
function save($group, $filename)
{
	$file = fopen($filename, "w");
	for($i = 0; $i < count($group); $i++)
	{
		fwrite($file, $group[$i]->csv() . ";\n");
	}
	fclose($file);

}
?>