<?php
include_once('header.php');
?>
 

            <!--Home Sections-->
<head>
	<script type="text/javascript">
		function matchpass(){
			var pass = document.getElementById('pass').value;
			var repass = document.getElementById('repass').value;
			if (pass.equals(repass) != true){
				document.getElementById('pass').style.background.color = color.red;
				document.getElementById('repass').style.background.color = color.red;
			}
		}
	</script>
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
</head><br>
<form action="register.php" method="post">

<div class="container" style="border:solid">
  <div class="register"><br>
  <div class="label">Sign Up</div><hr>
    <div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Full Name</span>
  		<input class="form-control" placeholder="Full Name" aria-describedby="sizing-addon1" type="text" id="fname">
	</div><br>
  	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Username</span>
  		<input class="form-control" placeholder="Username" aria-describedby="sizing-addon1" type="text" id="uname">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Email</span>
  		<input class="form-control" placeholder="Email" aria-describedby="sizing-addon1" type="text" id="email">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Password</span>
  		<input class="form-control" placeholder="Password" aria-describedby="sizing-addon1" type="password" id="pass">
	</div><br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Retype</span>
  		<input class="form-control" placeholder="Retype" aria-describedby="sizing-addon1" type="password" id="repass">
	</div>
	<div class="alert-danger" id="my" style="padding-left: 12px;width: 400px;" hidden style='display:"none";'>Both Password MustMatch</div>
  		<br>
	<div class="input-group input-group-lg">
  		<span class="input-group-addon" id="sizing-addon1">Github Link</span>
  		<input class="form-control" placeholder="Github Link" aria-describedby="sizing-addon1" type="text" id="glink">
	</div><br>
	<input type="submit" class="btn-outline-primary" id="login-btn"  value="Register" onclick=  "return matchpass()">
  </div><br>
  </div>
  </form>
  <script type="text/javascript">
  	function matchpass()
  	{	
  		if(document.getElementById("pass").value!=document.getElementById("repass").value)
  		{document.getElementById("my").style.display="block";
  			return false;
  		}
  		else
  			{	
  				document.getElementById("my").style.display="hidden";
  				return true;
  			}
  		
    }

  		
  	
  </script>
 </div> <br>
<?php
include_once('footer.php');
?>