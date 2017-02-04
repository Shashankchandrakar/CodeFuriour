
<?php
include_once('header.php');
?>
 

            <!--Home Sections-->
<head>
	<style type="text/css">

		.container {
			width: 600px;
		}
		.input-group{
			width:400px;
		}

		.login {
			width: 600px;
			height: 300px;
		}

		#login-btn {
			padding: 5px;
			font-size: 21px;
			border-radius: 6px 6px 6px 6px;
		}

		#login-btn:hover {
			background: #99e8a6;
		}

		.label {
			width: 400px;
			height: 200px;
			font-size: 21px;
			color: #689bed;
			padding: 5px;
		}
	</style>
</head>
<div class="container" style="border:solid">
  <div class="login"><br>
  <form action='login_connect.php' method="POST">
  	   <div class="label">Sign In</div><hr width="555px">
  	   <div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Email</span>
  		<input class="form-control" placeholder="Email" aria-describedby="sizing-addon1" type="text">
	   </div>
	   <br>
  	   <div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Password</span>
  		<input  class="form-control" placeholder="Password" aria-describedby="sizing-addon1" type="password">
	   </div>
  	   <br>
  	   <input type="submit" class="btn-outline-primary" id="login-btn" value="Login">&nbsp;&nbsp;
  	   <a href="signup.php"><button type="button" class="btn-outline-primary" id="login-btn">Register</button></a>
  	 </form>
  </div>
  <!--div class="register">
  <div class="label">Sign Up</div><hr>
  	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Username</span>
  		<input class="form-control" placeholder="Username" aria-describedby="sizing-addon1" type="text">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Email</span>
  		<input class="form-control" placeholder="Email" aria-describedby="sizing-addon1" type="text">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Password</span>
  		<input class="form-control" placeholder="Password" aria-describedby="sizing-addon1" type="password">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Retype</span>
  		<input class="form-control" placeholder="Retype" aria-describedby="sizing-addon1" type="password">
	</div><br>
	<button type="button" class="btn-outline-primary" id="login-btn">Register</button>
  </div><br-->
 </div> <br>
<?php
include_once('footer.php');
?>