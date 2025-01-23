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
function dec_to_bin($n) {
    $binary = '';
    while ($n > 0) {
        $binary = ($n % 2) . $binary;
        $n = intdiv($n, 2);
    }
    return $binary;
}

function dec_to_hex($n) {
    $hex = '';
    $hexChars = '0123456789ABCDEF';
    while ($n > 0) {
        $hex = $hexChars[$n % 16] . $hex;
        $n = intdiv($n, 16);
    }
    return $hex;
}




?>