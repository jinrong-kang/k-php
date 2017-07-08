<?php

class Userform{
	private $A1 = 0;
	private $A2 = 0;
	private $A3 = 0;

	private $B1 = 0;
	private $B2a = 0;
	private $B2b = "";
	private $B3 = 0;
	private $B4 = 0;
	private $B5 = 0;
	private $B6 = 0;
	private $B7 = 0;
	
	private $C1a = 0;
	private $C1b = 0;
	private $C1c = 0;
	private $C1d = 0;
	private $C2 = 0;
	private $C3 = 0;
	private $C4 = 0;
	private $C5 = 0;
	
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
		if ($_A3 > 0 && $_A3 <= 3)
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
	function setB5($_B5)
	{
		if ($_B5 > 0 && $_B5 <= 4)
		{
			$this->B5 = $_B5;
		}
	}
	function getB5()
	{
		return $this->B5;
	}
	function setB6($_B6)
	{
		if ($_B6 == 2 || $_B6 == 1)
		{
			$this->B6 = $_B6;
		}
	}
	function getB6()
	{
		return $this->B6;
	}
	function setB7($_B7)
	{
		if ($_B7 == 2 || $_B7 == 1)
		{
			$this->B7 = $_B7;
			// echo "$this->B7";
		}
	}
	function getB7()
	{
		return $this->B7;
	}
	//B questions

	function setC1a($_C1a)
	{
		if ($_C1a > 0 && $_C1a <= 4)
		{
			$this->C1a = $_C1a;
		}
	}
	function getC1a()
	{
		return $this->C1a;
	}
	function setC1b($_C1b)
	{
		if ($_C1b > 0 && $_C1b <= 4)
		{
			$this->C1b = $_C1b;
		}
	}
	function getC1b()
	{
		return $this->C1b;
	}
	function setC1c($_C1c)
	{
		if ($_C1c > 0 && $_C1c <= 4)
		{
			$this->C1c = $_C1c;
		}
	}
	function getC1c()
	{
		return $this->C1c;
	}
	function setC1d($_C1d)
	{
		if ($_C1d > 0 && $_C1d <= 4)
		{
			$this->C1d = $_C1d;
		}
	}
	function getC1d()
	{
		return $this->C1d;
	}
	function setC2($_C2)
	{
		if ($_C2 > 0 && $_C2 <= 4)
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
		if ($_C3 == 2 || $_C3 == 1)
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
		if ($_C4 == 2 || $_C4 == 1)
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
		if ($_C5 == 2 || $_C5 == 1)
		{
			$this->C5 = $_C5;
		}
	}
	function getC5()
	{
		return $this->C5;
	}
	//C questions

	function setD1($_D1)
	{
		$this->D1 = $_D1;
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