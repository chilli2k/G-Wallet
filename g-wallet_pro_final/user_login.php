<?php
require 'db.php';
$sql = 'SELECT * FROM user_data';
$statement = $connection->prepare($sql);
$statement->execute();
$user_data = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$email=$_POST['email'];
$password=$_POST['password'];
$con=mysqli_connect("localhost","root","","g-wallet");
$query="SELECT * FROM user_data where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
$rows = mysqli_num_rows($res);
session_start();
 if($rows==1){
 	header('location:user_dashboard.php');
 	$_SESSION['email']=$email;
 }
else{
	echo "INVALID USERNAME AND PASSWORD";
}
}
?>