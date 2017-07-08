<?php
include_once 'db.php';
include_once 'clientform.php';
include_once 'userform.php';
include_once 'userinfo.php';

$userinfo = new Userinfo();
$userinfo->setName($_POST['name']);
$userinfo->setEmail($_POST['email']);
$userinfo->setAddress($_POST['address']);
$userinfo->setTel($_POST['tel']);
$userinfo->settype($_POST['type']);

$typenumber = $userinfo->getType();

$db = new DBUser();
$ins_id = $db->insertUser($userinfo);
// $db->selectUser($userinfo);

if ($typenumber == 1)
{
	$userform = new Userform();
	$userform->setA1($_POST['A1']);
	$userform->setA2($_POST['A2']);
	$userform->setA3($_POST['A3']);
	
	$userform->setB1($_POST['B1']);
	$userform->setB2a($_POST['B2a']);
	$userform->setB2b($_POST['B2b']);
	$userform->setB3($_POST['B3']);
	$userform->setB4($_POST['B4']);
	$userform->setB5($_POST['B5']);
	$userform->setB6($_POST['B6']);
	$userform->setB7($_POST['B7']);

	$userform->setC1a($_POST['C1a']);
	$userform->setC1b($_POST['C1b']);
	$userform->setC1c($_POST['C1c']);
	$userform->setC1d($_POST['C1d']);
	$userform->setC2($_POST['C2']);
	$userform->setC3($_POST['C3']);
	$userform->setC4($_POST['C4']);
	$userform->setC5($_POST['C5']);
	
	$userform->setD1($_POST['D1']);

	$db->insertUserform($userform, $ins_id);
} else if ($typenumber == 2)
{
	$clientform = new Clientform();
	$clientform->setA1($_POST['A1']);
	$clientform->setA2($_POST['A2']);
	$clientform->setA3($_POST['A3']);

	$clientform->setB1($_POST['B1']);
	$clientform->setB2a($_POST['B2a']);
	$clientform->setB2b($_POST['B2b']);
	$clientform->setB3($_POST['B3']);
	$clientform->setB4($_POST['B4']);
	
	$clientform->setC1($_POST['C1']);
	$clientform->setC2($_POST['C2']);
	$clientform->setC3($_POST['C3']);
	$clientform->setC4($_POST['C4']);
	$clientform->setC5($_POST['C5']);
	$clientform->setC6($_POST['C6']);
	$clientform->setC7($_POST['C7']);
	
	$clientform->setD1($_POST['D1']);

	$db->insertClientform($clientform, $ins_id);
} else {
	echo "PLEASE　CHOOSE A FORM";
}
?>