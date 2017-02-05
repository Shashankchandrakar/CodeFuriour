<?php
session_start();
require('connect.php');
	//echo isset($_)
	//echo "start ";
	//if(isset($_SESSION['email']))
	{
		$bclick = $_GET['mark'];
		$studid = $_SESSION['studid'];
		$course_id = $_GET['course_id'];
		$track_id = $_GET['track_id'];
		echo $studid;
		echo " $course_id  ";

		if(isset($bclick))
		{
			$query = "update student_course set course_status=1 where stud_id='$studid' and course_id='$course_id'";
			$query1 = "update student_track set course_count=course_count+1 where stud_id='$studid' and track_id='$track_id'";
			$result = mysqli_query($conn,$query);
			$result1 = mysqli_query($conn,$query1);

			echo $result;
			echo $result1;
			header("Location: track".$track_id.".php");
		}
	}
?>