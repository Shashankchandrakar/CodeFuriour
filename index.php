<?php
include_once('header.php');
?>
 

            <!--Home Sections-->
<head>
	<style type="text/css">
		.learn-subject, .learn-track-system {
			width: 300px;
			height: 300px;
			background: #fff;
			border-radius: 100%;
			position: relative;
			padding-top: 130px;
			font-size: 25px;
		}

		.learn-subject:hover, .learn-track-system:hover {
			background: orange;
			position: relative;
			font-size: 30px; 
			transition : font-size 30px;
			transition-duration: 0.3s;
		}

		.connect {
			width: 20px;
			height: 100px;
			background: gray;
		}

		.animtext {
			display: none;
		}
		.animtext:hover {
			display: block;
		}

	</style>
</head>
   		<div class="container" align="center"><br>
   			<a href="track1.php"><div class="learn-subject">Find Course</div></a>
   			<div class="connect"></div>
   			<a href="track1.php"><div class="learn-subject">Learn Course</div></a>
   			<div class="connect"></div>
   			<a href="track1.php"><div class="learn-track-system">Curated Tracks</div></a><br>
   		</div>	

  
<?php
include_once('footer.php');
?>