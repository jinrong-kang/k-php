<?php

include_once 'userinfo.php';
include_once 'dbconn.php';

class DBCheck
{
	private $conn;
	$c = new DBConn();
	$conn = $c->getConn();

	function checkUserEmail($email)
	{
		$sql="SELECT * FROM t_userinfo WHERE email='$email'";
		$retval = mysql_query( $sql, $this->conn);
		if(mysql_fetch_array($retval))
		{
   			return 1;
		}
		return 0;
	}
}
?>