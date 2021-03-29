<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","g-wallet");
$query="SELECT * FROM admin_users where username='$username' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
 	header('location:admin_dashboard.php');
 	$_SESSION['username']=$username;
 }
else{
	echo "INVALID USERNAME AND PASSWORD";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="admin_login.css">
	<style type="text/css">
		body{
			background-image: url(db.jpg), no-repeat;
		}

	</style>
</head>
<body>
	<div class="formbox">
		<h2>Admin Login</h2>
		<form method="POST" action="admin_login.php">
			<input type="text" name="username" placeholder="Enter your username">
			<input type="password" name="password" placeholder="Enter your password">
			<input type="submit" value="LOGIN">   
		
		</form>
	</div><!--end of formbox-->
</body>
</html>