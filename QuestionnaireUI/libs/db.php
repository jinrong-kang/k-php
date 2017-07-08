<?php

include_once 'clientform.php';
include_once 'userform.php';
include_once 'userinfo.php';
include_once 'dbconn.php';

class DBUser
{
	private $c;

	function __construct()
	{
		$this->c = new DBConn();
	}
	//插入函数
	//userinfo insert
	function insertUser($userinfo)
	{
		$name = $userinfo->getName();
		$email = $userinfo->getEmail();
		$add = $userinfo->getAddress();
		$tel = $userinfo->getTel();
		$type = $userinfo->getType();

		$sql="INSERT INTO t_user_info(name, email, address, tel, type)
		VALUES('$name','$email','$add','$tel','$type')";
		$retval = mysql_query( $sql, $this->c->getConn());
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->c->getConn()));
		}
		$id_i = mysql_insert_id();
		return $id_i;
	}
	//userform insert
	function insertUserform($userform, $id_fk)
	{
		$a1 = $userform->getA1();
		$a2 = $userform->getA2();
		$a3 = $userform->getA3();

		$b1 = $userform->getB1();
		$b2a = $userform->getB2a();
		$b2b = $userform->getB2b();
		$b3 = $userform->getB3();
		$b4 = $userform->getB4();
		$b5 = $userform->getB5();
		$b6 = $userform->getB6();
		$b7 = $userform->getB7();

		$c1a = $userform->getC1a();
		$c1b = $userform->getC1b();
		$c1c = $userform->getC1c();
		$c1d = $userform->getC1d();
		$c2 = $userform->getC2();
		$c3 = $userform->getC3();
		$c4 = $userform->getC4();
		$c5 = $userform->getC5();

		$d1 = $userform->getD1();

		$time = $userform->fill_time;

		$sql="INSERT INTO `t_user_form` (`A1`, `A2`, `A3`, `B1`, `B2a`, `B2b`, `B3`, `B4`, `B5`, `B6`, `B7`, `C1a`, `C1b`, `C1c`, `C1d`, `C2`, `C3`, `C4`, `C5`, `D1`, `fill_time`, `id_iu`) VALUES ('$a1','$a2','$a3','$b1','$b2a','$b2b','$b3','$b4','$b5','$b6','$b7','$c1a','$c1b','$c1c','$c1d','$c2','$c3','$c4','$c5','$d1','$time','$id_fk')";
		$retval = mysql_query( $sql, $this->c->getConn());
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->c->getConn()));
		}
	}
	//clientform insert
	function insertClientform($clientform, $id_fk)
	{
		$a1 = $clientform->getA1();
		$a2 = $clientform->getA2();
		$a3 = $clientform->getA3();

		$b1 = $clientform->getB1();
		$b2a = $clientform->getB2a();
		$b2b = $clientform->getB2b();
		$b3 = $clientform->getB3();
		$b4 = $clientform->getB4();

		$c1 = $clientform->getC1();
		$c2 = $clientform->getC2();
		$c3 = $clientform->getC3();
		$c4 = $clientform->getC4();
		$c5 = $clientform->getC5();
		$c6 = $clientform->getC6();
		$c7 = $clientform->getC7();

		$d1 = $clientform->getD1();

		$time = $clientform->fill_time;

		$sql="INSERT INTO `t_client_form` (`A1`, `A2`, `A3`, `B1`, `B2a`, `B2b`, `B3`, `B4`, `C1`, `C2`, `C3`, `C4`, `C5`, `C6`, `C7`, `D1`, `fill_time`, `id_ic`) VALUES ('$a1','$a2','$a3','$b1','$b2a','$b2b','$b3','$b4','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$d1','$time','$id_fk')";
		$retval = mysql_query( $sql, $this->c->getConn());
		if(! $retval )
		{
   			die('insert failed: ' . mysql_error($this->c->getConn()));
		}
	}
	//提取函数
	// function selectUser($userinfo)
	// {
	// 	$user = new User();
	// 	$user->setName($retval->);
	// 	$sql="SELECT * FROM userinfo";
	// 	$retval = mysql_query( $sql, $this->conn);
	// 	if(! $retval )
	// 	{
 //   			die('select failed: ' . mysql_error($this->conn));
	// 	}
	// 	return $user;
	// }
}

?>