<?php

function format_table($result)
{
	//$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);

	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		//echo "<tr id=\"{$row['teacher_id']}\">";
		echo "<tr>";
		echo '<pre>';
		//echo explode('_', array_keys($row)[0])[0];
		echo '</pre>';
		foreach($row as $col)
		{
			echo'<td>';
			echo $col;
			echo'</td>';
		}
		echo '<td>';
		$record = explode('_', array_keys($row)[0])[0];
		//$filename = $record.'php';
		$id = $record.'_id';
		echo "<a href=\"../{$record}s/{$record}.php?id={$row[$id]}\">Подробно</a>";
		echo '</td>';
		echo "</tr>";
	}
}

?>