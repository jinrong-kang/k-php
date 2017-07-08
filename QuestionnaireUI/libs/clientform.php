<?php
// require 'db.php';
// include 'db.php';


class Clientform{
	private $A1 = 0;
	private $A2 = 0;
	private $A3 = 0;

	private $B1 = 0;
	private $B2a = 0;
	private $B2b = "";
	private $B3 = 0;
	private $B4 = 0;
	
	private $C1 = 0;
	private $C2 = 0;
	private $C3 = 0;
	private $C4 = 0;
	private $C5 = 0;
	private $C6 = 0;
	private $C7 = 0;
	
	private $D1 = "";

	public $fill_time;

	function __construct()
	{
		$this->fill_time = date("Y-m-d H:i:s");
	}

	function setA1($_A1)
	{
		if ($_A1 > 0 && $_A1 <= 6)
		{
			$this->A1 = $_A1;
		}
	}
	function getA1()
	{
		return $this->A1;
	}
	function setA2($_A2)
	{
		if ($_A2 > 0 && $_A2 <= 2)
		{
			$this->A2 = $_A2;
		}
	}
	function getA2()
	{
		return $this->A2;
	}
	function setA3($_A3)
	{
		if ($_A3 > 0 && $_A3 <= 9)
		{
			$this->A3 = $_A3;
		}
	}
	function getA3()
	{
		return $this->A3;
	}
	//A questions

	function setB1($_B1)
	{
		if ($_B1 > 0 && $_B1 <= 2)
		{
			$this->B1 = $_B1;
		}
	}
	function getB1()
	{
		return $this->B1;
	}
	function setB2a($_B2a)
	{
		if ($_B2a > 0 && $_B2a <= 2)
		{
			$this->B2a = $_B2a;
		}
	}
	function getB2a()
	{
		return $this->B2a;
	}
	function setB2b($B2b)
	{
		$this->B2b = $B2b;
	}
	function getB2b()
	{
		return $this->B2b;
	}
	function setB3($_B3)
	{
		if ($_B3 > 0 && $_B3 <= 5)
		{
			$this->B3 = $_B3;
		}
	}
	function getB3()
	{
		return $this->B3;
	}
	function setB4($_B4)
	{
		if ($_B4 > 0 && $_B4 <= 3)
		{
			$this->B4 = $_B4;
		}
	}
	function getB4()
	{
		return $this->B4;
	}
	//B questions

	function setC1($_C1)
	{
		if ($_C1 > 0 && $_C1 <= 3)
		{
			$this->C1 = $_C1;
		}
	}
	function getC1()
	{
		return $this->C1;
	}
	function setC2($_C2)
	{
		if ($_C2 > 0 && $_C2 <= 3)
		{
			$this->C2 = $_C2;
		}
	}
	function getC2()
	{
		return $this->C2;
	}
	function setC3($_C3)
	{
		if ($_C3 > 0 && $_C3 <= 3)
		{
			$this->C3 = $_C3;
		}
	}
	function getC3()
	{
		return $this->C3;
	}
	function setC4($_C4)
	{
		if ($_C4 > 0 && $_C4 <= 3)
		{
			$this->C4 = $_C4;
		}
	}
	function getC4()
	{
		return $this->C4;
	}
	function setC5($_C5)
	{
		if ($_C5 > 0 && $_C5 <= 3)
		{
			$this->C5 = $_C5;
		}
	}
	function getC5()
	{
		return $this->C5;
	}
	function setC6($_C6)
	{
		if ($_C6 > 0 && $_C6 <= 3)
		{
			$this->C6 = $_C6;
		}
	}
	function getC6()
	{
		return $this->C6;
	}
	function setC7($_C7)
	{
		if ($_C7 > 0 && $_C7 <= 3)
		{
			$this->C7 = $_C7;
		}
	}
	function getC7()
	{
		return $this->C7;
	}

	//C questions

	function setD1($D1)
	{
		$this->D1 = $D1;
	}
	function getD1()
	{
		return $this->D1;
	}
	//D question

	//display
	function display()
	{
		echo "A1 : ".$this->A1."<br>";
	}

	}
?>