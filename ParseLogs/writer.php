<?php
/** 
*This file for 
*1.parse txt flile 
*2.write into database
* 
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  
include_once 'db_log.php';
include_once 'ping.php';
include_once 'auth.php';
include_once 'login.php';

class Writer
{
	/** 
	*This class for inserting filedata to database
	* @since        1.0 
	*/  

	public $type;
	public $file;
	private $db;

	/**
	* @access  public
	* @param mixed $arg1  The txt file name
	* @param mixed $arg2  The type decide which database table to insert. 
	*/
	function __construct($file, $type)
	{
		$this->file = $file;
		$this->type = $type;
		$this->db = new DBLog();
	}
	
	/**
	* choose three database table to insert data.
	* @access  public
	*/
	function write()
	{
		$file_data = file_get_contents($this->file);
		$lines_data= explode("\n",$file_data);
		switch ($this->type)
		{
			case "login": $this->writeToLogin($lines_data); break;
			case "auth": $this->writeToAuth($lines_data); break;
			case "ping": $this->writeToPing($lines_data); break;
			default: echo "no such type<br/>";
		}
		echo "write ".count($lines_data)." lines into table t_".$this->type."<br/>";
	}

	/**
	* @access  private
	* @param $arg1  A string contains a line of record to insert into table t_ping.
	*/
	private function writeToPing($lines_data)
	{
		foreach ($lines_data as $line_data) {
		$ping = new Ping($line_data);
		$this->db->insertPing($ping);
		}
	}

	/**
	* @access  private
	* @param $arg1  A string contains a line of record to insert into table 
	* t_login.
	*/
	private function writeToLogin($lines_data)
	{
		foreach ($lines_data as $line_data) {
		$login = new Login($line_data);
		$this->db->insertLogin($login);
		}
	}

	/**
	* @access  private
	* @param $arg1  A string contains a line of record to insert into table t_auth.
	*/
	private function writeToAuth($lines_data)
	{
		foreach ($lines_data as $line_data) {
		$auth = new Auth($line_data);
		$this->db->insertAuth($auth);
		}
	}
}
?>