<?php

class DBUser
{
	
	public $host = 'localhost';
	public $user = 'root';    
	public $passwd = '';
	public $dbName = "db_test";

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
	function insertUser($user)
	{
		$sql="INSERT INTO t_user (name, passwd, age, reg_time, email)
		VALUES('$user->name','$user->passwd',$user->age,'$user->reg_time','$user->email')";
		$retval = mysql_query( $sql, $this->conn);
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->conn));
		}
	}


	function checkUserName($name)
	{
		$sql="SELECT * FROM t_user WHERE name='$name'";
		$retval = mysql_query( $sql, $this->conn);
		if(mysql_fetch_array($retval))
		{
   			return 1;
		}
		return 0;
	}

	function checkUserEmail($email)
	{
		$sql="SELECT * FROM t_user WHERE email='$email'";
		$retval = mysql_query( $sql, $this->conn);
		if(mysql_fetch_array($retval))
		{
   			return 1;
		}
		return 0;
	}
}

?>