<?php
include_once('header.php');
  $_SESSION['track_id_passed'] = 1;
  require('connect.php');
  $query = "select total_count from track_table where track_id=1";
  $result = mysqli_query($conn,$query);
  $data = mysqli_fetch_array($result);
  if(isset($data[0])){
    $total_count = $data[0];
  } else {
    echo "Nope";
  }
  @$studid = @$_SESSION['studid'];
  $query1 = "select course_count from student_track where stud_id='$studid'";
  $result1 = mysqli_query($conn,$query1);
  $data1 = mysqli_fetch_array($result1);
  if(isset($data1[0])){
    $course_count = $data1[0];
  } else {
  }
  @$pbar = @$course_count/@$total_count*100;
  //echo $pbar;
?>
 

            <!--Home Sections-->

   	<div class="container custom-color">
   		
   		<div class="container">
   		<div class="track-title"><h1 align="center" style="color: #6c6c6d;" >Front End Web Development</h1></div>
         <hr>
         <div class="track-info">
            
         </div>
            <div align="center">
               <div class="card course-div">
                 <div class="card-block">
                   <h4 class="card-title course-title">How to Use Git and GitHub</h4>
                   <h6 class="card-subtitle mb-2 text-muted course-subtitle">Udacity</h6>
                   <p class="card-text course-text">
                     his course, built with input from GitHub, will introduce the basics of using version control by focusing on a particular version control system called Git and a collaboration platform called GitHub.
                   </p>
                   <a href="course1.php?track_id_passed=<?php echo $_SESSION['track_id_passed']?>" class="card-link course-link"><button type="button" class="btn btn-outline-primary">Start Learning!</button></a>
                 </div>
                 
               </div>
               <div class="course-footer">
                 </div>
            </div>
            <div align="center">
               <div class="vertical-line" >
               </div>
            </div>

            <div align="center">
               <div class="card course-div" >
                 <div class="card-block">
                   <h4 class="card-title course-title" style="background: #a0383f;">Introduction to Python</h4>
                   <h6 class="card-subtitle mb-2 text-muted course-subtitle">Udacity</h6>
                   <p class="card-text course-text">
                     his course, built with input from GitHub, will introduce the basics of using version control by focusing on a particular version control system called Git and a collaboration platform called GitHub.
                   </p>
                   <a href="course2.php?track_id_passed=<?php echo $_SESSION['track_id_passed']?>" class="card-link course-link"><button type="button" class="btn btn-outline-primary">Start Learning!</button></a>
                 </div>
               </div>
            </div>
            <div align="center">
               <div class="vertical-line" >
               </div>
            </div>
            <div align="center">
               <div class="card course-div">
                 <div class="card-block">
                   <h4 class="card-title course-title">Introduction to PHP</h4>
                   <h6 class="card-subtitle mb-2 text-muted course-subtitle">Udacity</h6>
                   <p class="card-text course-text">
                     PHP is a general-purpose scripting language that is especially suited to server-side web development, in which case PHP generally runs on a web server. Any PHP code in a requested file is executed by the PHP runtime, usually to create dynamic web page content or dynamic images used on websites or elsewhere.
                   </p>
                   <a href="course3.php?track_id_passed=<?php echo $_SESSION['track_id_passed']?>" class="card-link course-link"><button type="button" class="btn btn-outline-primary">Start Learning!</button></a>
                 </div>
               </div>
            </div>
            <div align="center">
               <div class="vertical-line" >
               </div>
            </div>
            <div align="center">
               <div class="card course-div">
                 <div class="card-block">
                   <h4 class="card-title course-title">Python Lists</h4>
                   <h6 class="card-subtitle mb-2 text-muted course-subtitle">Codefuriour</h6>
                   <p class="card-text course-text">
                     his course, built with input from GitHub, will introduce the basics of using version control by focusing on a particular version control system called Git and a collaboration platform called GitHub.
                   </p>
                   <a href="course4.php?track_id_passed=<?php echo $_SESSION['track_id_passed']?>" class="card-link course-link"><button type="button" class="btn btn-outline-primary">Start Learning!</button></a>
                 </div>
               </div>
            </div><br>
            <div align="center"></div>
            <div class="progress">
              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $pbar;?>%">
               <?php echo $pbar;?>% Complete (success)
              </div>
            </div>
               		</div>
	</div>
  
<?php
include_once('footer.php');
?>