<?php
// require 'db.php';
include 'db.php';

$db = new DBUser();
if($_GET["flag"] == 1)
{
	$name=$_GET["name"];

	$isNameExist = $db->checkUserName($name);

	if ($isNameExist == 0)
  	{
  	$response="恭喜你，该名字未注册！";
  	}
	else
  	{
  	$response="对不起，该名字已注册，请重新输入";
 	}
  	echo $response;
 }
else
{
	$email=$_GET["email"];

	$isEmailExist = $db->checkUserEmail($email);

	if ($isEmailExist == 0)
  	{
  	$response="恭喜你，该邮箱未注册！";
  	}
	else
  	{
  	$response="对不起，该邮箱已注册，请重新输入";
 	}
  	echo $response;
}
?>