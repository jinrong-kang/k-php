<?php
/** 
*This file for 
*choose one of the three txt file to insert into database .
*Different file match for different table in database.
* @author      kangjinrong<kang-96@qq.com>
* @version     $Id$
* @since        1.0 
*/  

include_once 'writer.php';

/** 
* $file = the name of txt file
* $type = the table in database  
*/

$file = "txts/Ping.txt";
$type = $_GET['type'];
switch ($type)
	{
		case "login": $file = "txts/Login.txt"; break;
		case "auth":  $file = "txts/Auth.txt"; break;
		case "ping":  $file = "txts/Ping.txt"; break;
		default: echo "no such type<br/>";
	}
$w = new Writer($file,$type);
$w->write();
?>