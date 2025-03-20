<?php

function format_table($result)
{
	$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo "<tr id=\"{$row['teacher_id']}\">";
		foreach($row as $col)
		{
			echo'<td>';
			echo $col;
			echo'</td>';
		}
		echo '<td>';
		echo "<a href=\"teacher.php?id={$row['teacher_id']}\">Подробно</a>";
		echo '</td>';
		echo "</tr>";
	}
}

?>