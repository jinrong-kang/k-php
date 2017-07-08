<?php

class DBConn{
	private $host = 'localhost';
	private $user = 'root';    
	private $passwd = '';
	private $dbName = "db_questionnaire";

	private $conn;

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

	function getConn()
	{
		return $this->conn;
	}
}

?>