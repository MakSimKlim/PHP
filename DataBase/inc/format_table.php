<?php

function format_table($result)
{
	$row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC);
	while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC))
	{
		echo '<tr>';
		foreach($row as $col)
		{
			echo'<td>';
			echo $col;
			echo'</td>';
		}
		echo '</tr>';
	}
}

?>