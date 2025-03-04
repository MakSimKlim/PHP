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

?>