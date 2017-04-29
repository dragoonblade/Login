<?php
	session_start();
	require_once "config.php";

	$title=$_POST['title'];

	$body=$_POST['body'];

	$user_id=$_SESSION['user_id'];

	$sql="INSERT INTO `posts` (`user_id`, `title`, `body`) values ('".$user_id."', '".$title."', '".$body."')";

	$mysql->query($sql);

	$_SESSION['message']='Post added successfully';

	header('Location:view_post.php');

?>