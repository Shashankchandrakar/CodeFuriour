<?php
	$con=mysqli_connect("localhost","root","vaibhav123");
	if(!$con)
	{
		die("Database Connection Failed");

	}
	$selectdb=mysqli_select_db($con,"hackthon_db");
	if(!$selectdb)
	{
		die("Database selection failed");
	}
 session_start();
 
 ?>
