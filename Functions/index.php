<?PHP
$title ='PHP Functions';

function exchange(&$a, &$b)
{
	$buffer = $a;
	$a =$b;
	$b = $buffer;
}

function print_values($a, $b, $delimeter = ';')
{
	echo '<pre>';
	echo "$a\t$b$delimeter";
	echo '</pre>';
}
function sum_values(...$values)
{
	$sum=0;
	for($i=0; $i<count($values); $i++)
	{
		$sum += $values[$i];
	}
	return $sum;
}

require 'index.view.php';
?>