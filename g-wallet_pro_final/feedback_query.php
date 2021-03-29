<?php
require 'db.php';
$sql = 'SELECT * FROM contact';
$statement = $connection->prepare($sql);
$statement->execute();
$contact = $statement->fetchAll(PDO::FETCH_OBJ);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Queries </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style media="screen">
    h2{
      color: #ffd700;
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
       <h4>Admin</h4>
      </center>
      <a href="admin_dashboard.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="user_details.php"><i class="fas fa-user"></i><span>User Details</span></a>
      <a href="create.php"><i class="fas fa-shopping-cart"></i><span>Add a user </span></a>
      <a href="edit_user.php"><i class="fas fa-table"></i><span>Edit user details</span></a>
      <a href="gold_edit.php"><i class="fas fa-info-circle"></i><span> Change Gold rate</span></a>
      <a href="queries.php"><i class="fas fa-envelope"></i><span>Customer Queries</span></a>

    </div>
    <!--sidebar end-->

    <div class="content">
    	<div class="row">


  <div class="column middle">
    <h2>Customer  Queries</h2>
    
      
      <table class="gold-table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>message</th>
      </tr>
    </thead>
    <?php foreach($contact as $rate): ?>
                <tr>
                  <td><?= $rate->id; ?></td>
                  <td><?= $rate->name; ?></td>
                  <td><?= $rate->email; ?></td>
                  <td><?= $rate->message; ?></td>


                </tr>
      <?php endforeach; ?>
  </table>
    </div>






  <!--  <div class="column side">
      <h2>Rate chart</h2>

    </div>-->



  </div>
</div>
  </body>
</html>
