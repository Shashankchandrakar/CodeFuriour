<?php
include_once('header.php');
$studid = $_SESSION['studid'];
$course_id = 3;
$track_id_passed = $_GET['track_id_passed'];
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

		#mark {

		}
	</style>
</head>
<body>
<div id="container" align="center" >
	<div class="intro" align="center" style="padding-left: 130px; padding-right: 130px;">
		<h2>Introduction To PHP</h2>
		
	</div>
	<br/>
	<div class="application" align="left" style="padding-left: 130px;">
	<p id="matter">

PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.

PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.
</p>
		<h2>Application</h2>
		<p id="data">PHP is a general-purpose scripting language that is especially suited to server-side web development, in which case PHP generally runs on a web server. Any PHP code in a requested file is executed by the PHP runtime, usually to create dynamic web page content or dynamic images used on websites or elsewhere.<br> It can also be used for command-line scripting and client-side graphical user interface (GUI) applications. PHP can be deployed on most web servers, many operating systems and platforms, and can be used with many relational database management systems (RDBMS). Most web hosting providers support PHP for use by their clients.<br> It is available free of charge, and the PHP Group provides the complete source code for users to build, customize and extend for their own use.</p>
		<div class="container" style="padding-left: 30px;">
			<div class="start">
				<h2>Let's learn PHP!</h2>
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
						<input type="text" name="course_id" value="<?php echo $track_id; ?>" id="course_id" hidden>
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