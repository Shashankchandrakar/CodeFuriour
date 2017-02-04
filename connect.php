
<?php
	$servername = "localhost";
	$username = "root";
	$password = "vaibhav123";
	$dbname = "hackthon_db";
	echo "hell";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	echo "hell";
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// prepare and bind
	$stmt = $conn->prepare("INSERT into student_info (stud_id,stud_name,stud_email,stud_password VALUES(?,?,?,?)");
	$stmt->bind_param("sss", $fname, $email, $pass);

	// set parameters and execute
	$uname = "John";
	$fname = "Doe";
	$email = "john@example.com";
	$pass = "123";
	$stmt->execute();

	echo "New records created successfully";

	$stmt->close();
	$conn->close();
?> 