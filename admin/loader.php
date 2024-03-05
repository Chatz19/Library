<?php
 	require_once '../config/connect.php';
 	session_start();
 	$email = $_SESSION['email'];
 	$password = $_SESSION['password'];
 	$admin = $_SESSION['admin'];

 	if((!isset($email) && !isset($password)) || (empty($email) && empty($password)) && $admin != "admin"){
 		header('location: ../');
 	}
?>