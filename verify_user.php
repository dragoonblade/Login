<?php
	session_start(); 
	//First line should be session start after php opening

	require_once "config.php";

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="SELECT * from `users` WHERE `email`='".$email."' AND `password`='".$password."'";

	//Result set which contains methods for fetching data
	$result=$mysql->query($sql);

	//Actual user from database
	$user=$result->fetch_row();

	//Validating User
	if($user){
		//User Found

		//From user object from database
		$_SESSION['username']=$user[1];
		$_SESSION['email']=$user[2];
		$_SESSION['user_id']=$user[0];
		$_SESSION['message']='User logged in successfully';
		header("Location:dashboard.php");
	}else{
		//User not found
		$_SESSION['message']='Either email/password is incorrect';
		header("Location:index.php");
	}
?>