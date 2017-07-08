<?php
/** 
*This file for Auth Class.
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  

class Auth{
	public $wan_ip;
	public $date_time;
	public $stage;
	public $ip;
	public $mac;
	public $token;
	public $incoming;
	public $outgoing;

	function __construct($string_line)
	{
		// $words= explode(" ",$string_line);
		//以空格分割为数组
		$words = preg_split("/[ ]+/", $string_line);
		$this->wan_ip = $words[0];
		//echo $this->wan_ip;
		// 10/Apr/2017:06:28:04		
		$time_words = explode("[",$words[1]);
		$this->date_time = $time_words[1];
		$stage = explode("=",$words[3]);
		$this->stage = $stage[1];
		//echo $this->stage;
		$ip_words = explode("=",$words[4]);
		$this->ip = $ip_words[1];
		//echo $this->ip;
		$mac_words = explode("=",$words[5]);
		$this->mac = $mac_words[1];
		//echo $this->mac;
		$token_words = explode("=",$words[6]);
		$this->token = $token_words[1];
		//echo $this->token;
		$incoming = explode("=",$words[7]);
		$this->incoming = $incoming[1];
		//echo $this->incoming;
		$outgoing = explode("=",$words[8]);
		$this->outgoing = $outgoing[1];
		//echo $this->outcoming;
	}

	
	// //display
	// function display()
	// {
	// 	echo "Name : ".$this->name."<br>";
	// 	echo "Age : ".$this->age."<br>";
	// 	echo "Passwd : ".$this->passwd."<br>";
	// 	echo "Email : ".$this->email."</br>";
	// 	echo "Register Time : ".$this->reg_time."<br>";
	// }

	}
?>