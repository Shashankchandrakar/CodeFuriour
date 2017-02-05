<?php
session_start();
	require('connect.php');
	

	$email = $_GET["email"];
	$pass = $_GET["pass"];
	$query = "select * from student_info where stud_email='$email' and stud_password='$pass'";
	$result = mysqli_query($conn,$query);
	$data = mysqli_fetch_array($result);
	if(isset($data[0])){
		echo "Logged IN";
		$_SESSION['email'] = $data[0];
		$_SESSION['name'] = $data[1];
		header("Location:index.php");
	} else {
		echo "Nope";
	}
	?>