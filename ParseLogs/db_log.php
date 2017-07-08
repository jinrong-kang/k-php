<?php
/** 
*This file for database operation.
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  
class DBLog
{
	
	public $host = 'localhost';
	public $user = 'root';    
	public $passwd = '';
	public $dbName = "db_logs";
	public $conn;

	//构造函数
	function __construct()
	{
		$conn = mysql_connect($this->host, $this->user, $this->passwd);
		if (!$conn) {
			die('connecting database failed!!!'.mysql_error($conn));
		}
		$this->conn = $conn;
		mysql_select_db($this->dbName, $conn);
	}

	//析构函数
	function __destruct()
	{
		mysql_close($this->conn);
	}


	//插入函数
	function insertPing($ping)
	{
		$sql="INSERT INTO t_ping (wan_ip, date_time, gw_id, sys_load, sys_memfree, sys_uptime, aiwifi_uptime)
		VALUES('$ping->wan_ip','$ping->date_time','$ping->gw_id','$ping->sys_load','$ping->sys_memfree','$ping->sys_uptime','$ping->aiwifi_uptime')";
		$retval = mysql_query( $sql, $this->conn);
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->conn));
		}
	}

	function insertLogin($login)
	{
		$sql="INSERT INTO t_login (wan_ip, date_time, gw_address, gw_port, gw_id, ip, mac, url, sys_info)
		VALUES('$login->wan_ip','$login->date_time','$login->gw_address','$login->gw_port','$login->gw_id','$login->ip','$login->mac','$login->url','$login->sys_info')";
		$retval = mysql_query( $sql, $this->conn);
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->conn));
		}
	}

	function insertAuth($auth)
	{
		$sql="INSERT INTO t_auth (wan_ip, date_time, stage, ip, mac, token, incoming,outgoing)
		VALUES('$auth->wan_ip','$auth->date_time','$auth->stage','$auth->ip','$auth->mac','$auth->token','$auth->incoming','$auth->outgoing')";
		$retval = mysql_query( $sql, $this->conn);
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->conn));
		}
	}
}

?>