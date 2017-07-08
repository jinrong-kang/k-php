<?php
// require 'db.php';
// include 'db.php';


class User{
	public $name = '';
	public $passwd = '';
	public $age = '';
	public $email = '';
	public $reg_timen;


	function __construct()
	{
		$this->reg_time = date("Y-m-d H:i:s");
	}

	
	function setName($name)
	{
		$this->name = $name;
	}
	function getName()
	{
		return $this->name;
	}
	//passwd;
	function setPasswd($passwd)
	{
		$this->passwd = $passwd;
	}
	function getPasswd()
	{
		return $this->passwd;
	}
	//age
	function setAge($age)
	{
		$this->age = $age;
	}
	function getAge()
	{
		return $this->age;
	}
	//email
	function setEmail($email)
	{
		$this->email = $email;
	}
	function getEmail()
	{
		return $this->email;
	}
	
	//display
	function display()
	{
		echo "Name : ".$this->name."<br>";
		echo "Age : ".$this->age."<br>";
		echo "Passwd : ".$this->passwd."<br>";
		echo "Email : ".$this->email."</br>";
		echo "Register Time : ".$this->reg_time."<br>";
	}

	}
?>