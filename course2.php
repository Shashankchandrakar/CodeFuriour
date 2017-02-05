<?php
include_once('header.php');
include_once('header.php');
$studid = $_SESSION['studid'];
$course_id = 2;
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

	</style>
</head>
<body>
<div id="container" align="center" >
	<div class="intro" align="center" style="background: #871b20; padding-left: 130px; padding-right: 130px;">
		<h2>Introduction To MySQL Course</h2>
		
	</div>
	<br/>
	<div class="application" align="left" style="padding-left: 130px;">
	<p id="matter">

SQL is a standard language for accessing databases.

Our SQL tutorial will teach you how to use SQL to access and manipulate data in: MySQL, SQL Server, Access, Oracle, Sybase, DB2, and other database systems.
</p>
		<h2>Application</h2>
		<p id="data">Many programming languages with language-specific APIs include libraries for accessing MySQL databases. These include MySQL Connector/Net for integration with Microsoft's Visual Studio (languages such as C# and VB are most commonly used) and the JDBC driver for<br>In addition, an ODBC interface called MySQL Connector/ODBC allows additional programming languages that support the ODBC interface to communicate with a MySQL database, such as ASP or ColdFusion. The HTSQL – URL-based query method also ships with a MySQL adapter, allowing direct interaction between a MySQL database and any web client via structured URLs.</p>
		<div class="container" style="padding-left: 30px;">
			<div class="start">
				<h2>Let's learn mysql!</h2>
			</div>
			<div class="lecture" style="padding-bottom: 10px">
				<center><iframe width="1000" height="505" src="https://www.youtube.com/embed/yPu6qV5byu4" frameborder="0" allowfullscreen></iframe></center>
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
						<input type="text" name="course_id" value="<?php echo $course_id;?>" id="course_id" hidden>
			   		<input type="text" name="track_id" value=" <?php echo $track_id; ?>" id="track_id" hidden>
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