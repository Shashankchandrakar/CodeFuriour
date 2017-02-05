<?php
include_once('header.php');
$studid = $_SESSION['studid'];
$course_id = 1;
$track_id = $_GET['track_id_passed'];
?>
<head>
	<style type="text/css">
		#matter {
			font-family: Tahoma;
			font-size: 19px;
		}

		#data {
			font-family: Tahoma;
			font-size: 19px;
		}

	</style>
</head>
<body>
<div id="container" align="center" >
	<div class="intro" align="center" style="padding-left: 130px; padding-right: 130px;">
		<h2>Introduction To Python course</h2>
		
	</div>
	<br/>
	<div class="application" align="left" style="padding-left: 130px;">
	<p id="matter">Introduction to Python is a resource for students who want to learn Python as their first language, and for teachers who want a free and open curriculum to use with their students.</p>
		<h2>Application</h2>
		<p id="data">The Python Package Index (PyPI) hosts thousands of third-party modules for Python. Both Python's standard library and the community-contributed modules allow for endless possibilities.</p>
		<div class="container" style="padding-left: 30px;">
		<ul style="list-style-type:circle ">
			<li  style="font-size: 18px">Web and Internet Development</li>
			<li  style="font-size: 18px">Database Access</li>
			<li  style="font-size: 18px">Desktop GUIs</li>
			<li  style="font-size: 18px">Scientific & Numeric</li>
			<li  style="font-size: 18px">Education</li>
			<li  style="font-size: 18px">Network Programming</li>
			<li  style="font-size: 18px">Software & Game Development</li>
		</ul>
			</div><br>
			<div class="start">
				<h2>Let's learn python!</h2>
			</div>
			<div class="lecture" style="padding-bottom: 10px">
				<center><iframe width="1000" height="505" src="https://www.youtube.com/embed/cpPG0bKHYKc" frameborder="0" allowfullscreen></iframe></center>
			</div>
			<div class="start">
				<h2>Problem Assignment</h2>
			</div>

			<div id="mark">
			    <form action="mark-course.php" method="get">
				<?php 
				require('connect.php');
					$query = "SELECT * from student_course where stud_id='$studid' and course_id='$course_id'";
					$result = mysqli_query($conn,$query);
					$data = mysqli_fetch_array($result);
					if(!isset($data[0]))
					{
						//not registered


					
				?>
				not registered.
				<?php
					} 
					else
					{	//user is registered
						$query1 = "SELECT * from student_course where stud_id='$studid' and course_id='$course_id' and course_status=0";
						$result1 = mysqli_query($conn,$query1);
						$data1 = mysqli_fetch_array($result1);
						if(!isset($data1[0]))
						{
					?>
						You have already completed this course.
					<?php } 
					else {
						?>
						<input type="text" name="course_id" value="<?php echo $course_id; ?>" id="course_id" hidden>
			   		<input type="text" name="track_id" value="<?php echo $track_id; ?>" id="track_id" hidden>
					<input type="submit" name="mark" value="Mark as Complete!" id='mark-complete'>
					<?php } } ?>
			   </form>	
			</div><br>
	</div>
</div>
</body>
<?php
include_once('footer.php');
?>