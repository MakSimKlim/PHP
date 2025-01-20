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
function Fibonacci($n)
{
	if ($n <=1)
	{
		return $n;
	}
	return Fibonacci($n-1) + Fibonacci($n-2);
	
	
}

?>