<?php
/** 
*This file for Ping Class.
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  

class Ping{
	public $wan_ip;
	public $date_time;
	public $gw_id;
	public $sys_load;
	public $sys_memfree;
	public $sys_uptime;
	public $aiwifi_uptime;

	function __construct($string_line)
	{
		//以空格分割为数组
		$words = preg_split("/[ ]+/", $string_line);
		$this->wan_ip = $words[0];
		//echo $this->wan_ip;
		// 10/Apr/2017:06:28:04		
		$time_words = explode("[",$words[1]);
		$this->date_time = $time_words[1];
		$gw_words = explode("=",$words[3]);
		$this->gw_id = $gw_words[1];
		//echo $this->gw_id;
		$load_words = explode("=",$words[4]);
		$this->sys_load = $load_words[1];
		//echo $this->sys_uptime;
		$memfree_words = explode("=",$words[5]);
		$this->sys_memfree = $memfree_words[1];
		//echo $this->sys_memfree;
		$sys_uptime_words = explode("=",$words[6]);
		$this->sys_uptime = $sys_uptime_words[1];
		//echo $this->sys_load;
		$uptime_words = explode("=",$words[7]);
		$this->aiwifi_uptime = $uptime_words[1];
		//echo $this->aiwifi_uptime;
	}

	}
?>