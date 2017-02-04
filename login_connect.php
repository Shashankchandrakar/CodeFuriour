<?php
	#require('connect.php');
	session_start();

	$_SESSION['user_id']='demo_user';
	$_SESSION['fname']='John';
	$_SESSION['email']='john@gmail.com';
	header("Location:index.php")
?>