<?php
require 'db.php';
$sql = 'SELECT * FROM gold_rate';
$statement = $connection->prepare($sql);
$statement->execute();
$user_data = $statement->fetchAll(PDO::FETCH_OBJ);
?>








<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personal Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style media="screen">
    h2{
      color: #ffd700;
    }
    p{
      color: #fff;
    }
  </style>
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>G <span>Wallet</span></h3>
      </div>
      <div class="right_area">
        <a href="user_logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="a.png" class="profile_image" alt="">
       <h4>User</h4>
      </center>
      <a href="user_dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="personal_details.php"><i class="fas fa-user"></i><span>Personal Details</span></a>
      <a href="buy.php"><i class="fas fa-shopping-cart"></i><span>Buy </span></a>
      <a href="gold_bought.php"><i class="fas fa-table"></i><span>Gold Vault</span></a>
      <a href="gold_rate.php"><i class="fas fa-info-circle"></i><span> Gold rate</span></a>
      <a href="about.html"><i class="fas fa-sliders-h"></i><span>About us</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    	<div class="row">


  <div class="column middle">
    <h2>User Details</h2>
    <p>

    <?php
    $db=mysqli_connect("localhost","root","","g-wallet");
    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $email = $_POST['email'];
    $result = mysqli_query($db,"SELECT * FROM user_data WHERE email='$email'");



    while($row = mysqli_fetch_array($result))
    {

    echo "First Name:    <br>" . $row['fName'] . "<br><br>";
    echo "Last Name:    <br> " . $row['lName'] .  "<br><br>";
    echo "E-mail:       <br> " . $row['email'] . "<br><br>";
    echo "Phone number:  <br>" . $row['pno'] . "<br><br>";


    }


    mysqli_close($db);

    ?>
</p>





  <!--  <div class="column side">
      <h2>Rate chart</h2>

    </div>-->



  </div>
</div>
  </body>
</html>
