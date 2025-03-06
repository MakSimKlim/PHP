<?php

class Human
{
	private $last_name;
	private $first_name;
	private $age;

	function get_last_name()
	{
		return $this->last_name;
	}
	function get_first_name()
	{
		return $this->first_name;
	}
	function get_age()
	{
		return $this->age;
	}

	function set_last_name($last_name)
	{
		$this->last_name = $last_name;
	}
	function set_first_name($first_name)
	{
		$this->first_name = $first_name;
	}
	function set_age($age)
	{
		$this->age = $age;
	}

	// Constructors:
	function __construct($first_name, $last_name, $age)
	{
		$this->set_first_name($first_name);
		$this->set_last_name($last_name);
		$this->set_age($age);
		echo 'HConstructor<br>';
	}
	function __destruct()
	{
		echo 'HDestructor<br>';
	}

	function info()
	{		
	}

	// вывод
	function __tostring()
	{
		return "{$this->get_first_name()} {$this->get_last_name()} {$this->get_age()}";
	}

	
}

///////////////////////////////////////////////////////////////////////

class Student extends Human
{
	private $speciality;
	private $group;
	private $rating;
	private $attendance;

	function get_speciality()
	{
		return $this->speciality;
	}
	function get_group()
	{
		return $this->group;
	}
	function get_rating()
	{
		return $this->rating;
	}
	function get_attendance()
	{
		return $this->attendance;
	}

	function set_speciality($speciality)
	{
		$this->speciality = $speciality;
	}
	function set_group($group)
	{
		$this->group = $group;
	}
	function set_rating($rating)
	{
		$this->rating = $rating;
	}
	function set_attendance($attendance)
	{
		$this->attendance = $attendance;
	}
	// Constructors:
	function __construct($first_name, $last_name, $age, $speciality, $group, $rating, $attendance)
	{
		parent::__construct($first_name, $last_name, $age);
		$this->set_speciality($speciality);
		$this->set_group($group);
		$this->set_rating($rating);
		$this->set_attendance($attendance);
		echo 'SConctructor<br>';
	}
	function __destruct()
	{
		echo 'SDestructor<br>';
	}
		function info()
	{	
		return "Group:{$this->get_group()}, Rating:{$this->get_rating()}, Attendance:{$this->get_attendance()}";
	}

	// вывод
	function __tostring()
	{
		//echo '<pre>';
		//print_r(__CLASS__ . '<br>');
		//var_dump($this);
		//echo '</pre>';

		return parent::__tostring() . " {$this->get_speciality()} {$this->get_group()} {$this->get_rating()} {$this->get_attendance()}";
	}

}
//////////////////////////////////////////////////////////////////

class Graduate extends Student
{
	private $subject;

	function get_subject()
	{
		return $this->subject;
	}
	function set_subject($subject)
	{
		$this->subject=$subject;
	}
	//Constructors:
	function __construct($first_name, $last_name, $age, $speciality, $group, $rating, $attendance, $subject)
	{
		parent::__construct($first_name, $last_name, $age, $speciality, $group, $rating, $attendance);
		$this->set_subject($subject);
		echo '<pre>GConstructor</pre>';
	}
	function __destruct()
	{
		echo '<pre>GDestructor</pre>';
	}

	function info()
	{	
		return parent::info() . " Subject:{$this->get_subject()}";
	}

		// вывод
	function __tostring()
	{
		return parent::__tostring() . " {$this->get_subject()}";
	}

}
/////////////////////////////////////////////////////////////////
class Teacher extends Human
{
	private $speciality;
	private $experience;

	function get_speciality()
	{
		return $this->speciality;
	}
	function get_experience()
	{
		return $this->experience;
	}

	function set_speciality($speciality)
	{
		$this->speciality = $speciality;
	}
	function set_experience($experience)
	{
		$this->experience = $experience;
	}

	//Constructors:

	function __construct($first_name, $last_name, $age, $speciality, $experience)
	{
		parent::__construct($first_name, $last_name, $age);
		$this->set_speciality($speciality);
		$this->set_experience($experience);
		echo 'TConctructor<br>';
	}
	function __destruct()
	{
		echo 'TDestructor<br>';
	}
	function info()
	{	
		return " Experience:{$this->get_experience()}";
	}


	// вывод
	function __tostring()
	{
		return parent::__tostring() . " {$this->get_speciality()} {$this->get_experience()}";
	}


}

?>