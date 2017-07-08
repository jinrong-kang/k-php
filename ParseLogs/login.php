<?php
/** 
*This file for Login Class.
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  

class Login{
	public $wan_ip;
	public $date_time;
	public $gw_address;
	public $gw_port;
	public $gw_id;
	public $ip;
	public $mac;
	public $url;
	public $sys_info;
	/**
	* @access  public
	* @param mixed $arg1  A string contains different attributes of class Login.
	*/
	function __construct($string_line)
	{
		$words= explode(" ",$string_line,9);
		$this->wan_ip = $words[0];
		$time_words = explode("[",$words[1]);
		$this->date_time = $time_words[1];
		$address_words = explode("=",$words[3]);
		$this->gw_address = $address_words[1];
		$port_words = explode("=",$words[4]);
		$this->gw_port = $port_words[1];
		$id_words = explode("=",$words[5]);
		$this->gw_id = $id_words[1];
		$ip_words = explode("=",$words[6]);
		$this->ip = $ip_words[1];
		$mac_words = explode("=",$words[7]);
		$this->mac = $mac_words[1];
		$url_rest = explode("=",$words[8],2);
		$info_rest = explode("(",$url_rest[1]);
		$replace_url = urldecode($info_rest[0]);
		$this->url = $replace_url;
		$rest = explode(")",$info_rest[1]);
		$this->sys_info = $rest[0];
	}

	}
?>