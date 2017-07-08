<?php

class Userinfo{
	private $name = '';
	private $email = '';
	private $address = '';
	private $tel = '';
	private $type = 0;
	public $fill_time;


	function __construct()
	{
		$this->fill_time = date("Y-m-d H:i:s");
	}

	
	public function setName($name)
	{
		$this->name = $name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setAddress($address)
	{
		$this->address = $address;
	}
	public function getAddress()
	{
		return $this->address;
	}
	public function setTel($tel)
	{
		$this->tel = $tel;
	}
	public function getTel()
	{
		return $this->tel;
	}
	public function setType($type)
	{
		$this->type = $type;
	}
	public function getType()
	{
		return $this->type;
	}
	
	//display
	function display()
	{
		echo "Name : ".$this->name."<br>";
	}

	}
?>