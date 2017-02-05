
<?php
	require('connect.php');

	$uname = $_POST["uname"];
	$fname = $_POST['fname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$contact = 1234;

	$query = "INSERT into student_info values($uname,$fname,$email,$pass,$contact)";

	$result = mysqli_query($conn,$query);
?> 