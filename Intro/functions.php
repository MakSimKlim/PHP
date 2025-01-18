<?php
function print_value($message, $value)
{
	echo '<pre>';//HTML-preformatted
	echo "$message\t\t$value";
	echo '</pre>';
}
function factorial($n)
{
	$f = 1;
	for($i =1; $i <= $n; $i++)
	{
		$f *= $i;
		print_value("$i != ", $f);
	}
	return $f;
}

?>