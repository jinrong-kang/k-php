<?php
// require 'db.php';
include_once 'user.php';
include_once 'db.php';

$user = new User();
$user->setName($_POST['name']);
$user->setPasswd($_POST['passwd']);
$user->setAge($_POST['age']);
$user->setEmail($_POST['email']);
$user->display();

$db = new DBUser();
$db->insertUser($user);
?>