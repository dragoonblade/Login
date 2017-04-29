<?php 
	session_start();
	require_once "config.php";

	$email=$_POST['email'];

	$username=$_POST['username'];

	$password=$_POST['password'];

	$sql="INSERT INTO `users` (`username`, `email`, `password`) values ('".$username."', '".$email."', '".$password."')";

	$mysql->query($sql);

	$_SESSION['message']='User added successfully';

	header('Location:signup.php');
?>