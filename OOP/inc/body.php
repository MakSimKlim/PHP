<?php

class Point
{
	private $x;
	private $y;
	//protected $z;

	function get_x()
	{
		return $this->x;
	}
	function get_y()
	{
		return $this->y;
	}
	function set_x($x)
	{
		$this->x = $x;
	}
	function set_y($y)
	{
		$this->y = $y;
	}

	// Constructors / Destructor

	//function __construct()
	//{
	//
	//}

	function __construct($x=0, $y=0)
	{
		$this->set_x($x);
		$this->set_y($y);
		echo "Constructor:\t<br>";
	}
	function __destruct()
	{
		
		echo "Destructor:\t<br>";
	}

	function info()
	{
		if($this->x == null && $this->y == null)
			echo 'Point is uninitialized';
		else 
			echo "X = {$this->x},\tY = {$this->y};";
		echo "<hr>";
	}
	function __tostring()
	{
		if($this->x == null && $this->y == null)
			return 'Point is uninitialized<br>';
		else 
			return "X = {$this->x},\tY = {$this->y};<br>";
		
	}
}

$A = new Point();
//$A->set_x(1024);
//$A->set_y(2048);
echo "Х = {$A->get_x()},\tY = {$A->get_y()};<br>";
//echo $A->y;
$A->info();

$B = new Point(2,3);
$B->info(); // вывод явным вариантом через стандартный класс
echo $B;    // вывод стандартный неявный вывод объекта $B через метод tostring
?>