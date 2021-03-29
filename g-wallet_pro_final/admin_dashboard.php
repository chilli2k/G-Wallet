<?php
require 'db.php';
$sql = 'SELECT * FROM gold_rate';
$statement = $connection->prepare($sql);
$statement->execute();
$gold_rate = $statement->fetchAll(PDO::FETCH_OBJ);
?>






<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style media="screen">
    h2{
      color: #ffd700;
    }
    ul li {
      color: #fff;
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
        <a href="admin_logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="a.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
          <a href="admin_dashboard.php"><i class="fas fa-home"></i>Dashboard </i></a>
          <a href="user_details.php"><i class="fas fa-user"></i> User Details </a>
          <a href="create.php" ><i class="fas fa-plus-circle"></i>Add a User </a> 
          <a href="edit_user.php"><i class="fas fa-edit"></i> Edit User Details </a>
          <a href="gold_edit.php"><i class="fas fa-rupee-sign"></i>Change Gold Rate</a>
          <a href="queries.php"><i class="fas fa-envelope"></i>Customer Queries</a>
          <a href="feedback_query.php"><i class="fas fa-envelope"></i>Customer Queries</a>
    <!--sidebar end-->
  </div>
    <div class="content">
      <div class="row">

    </div>
  <div class="column middle">
    <h2>Hey Admin!!</h2>
    <p>Welcome to the admin dashboard!!! <br> Using the menu bar to the left of the screen, you can choose the operations you want to perform, </p>
    <p> 
      <ul type="circle">  
           <li>Dashboard: On click, this brings you to the admin user home page</li>
           <li>User-details: On click, this displays all the availabale and registered users</li>  
           <li>Add User: You can add a new user on your own using this option</li>  
           <li>Edit User Details: Edit the personel details of a registered customer</li>  
           <li>Change Gold Rate: Here, you can update the gold rate everyday<br>Don't forget to keep the pattern of the calender in scending order.</li>
           <li>Customer Queries: Check out all the queries made by the customer here.</li>
          </ul>
        </p>
    </div>


  </div>




    

  </body>
</html>
