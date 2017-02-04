<?php session_start();
$_SESSION['user_id']='admin';
if( !isset( $_SESSION['user_id'] ) ): 
?>
<h2>Login Here</h2>
<form action="login-submit.php" method="post">
(etc.)
<?php else: ?>
<h2>Logout Here</h2>
<p><a href="logout.php">Log Out Link</a></p>
<?php endif; ?>
