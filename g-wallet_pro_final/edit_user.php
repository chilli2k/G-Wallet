<?php
require 'db.php';
$sql = 'SELECT * FROM user_data';
$statement = $connection->prepare($sql);
$statement->execute();
$user_data = $statement->fetchAll(PDO::FETCH_OBJ);
?>









<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User Details</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
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
    <!--sidebar end-->
  </div>
    </div>
    <!--sidebar end-->

    <div class="content">
    	<div class="row">


  <div class="column middle">
 

   
      <h2>All Users</h2>
  
   
      <table class="gold-table">
        <thead>
        <tr>
          
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone Number</th>
          <th>Action</th>
        </tr>
        </thead>
        <?php foreach($user_data as $cust): ?>
          <tr>
            
            <td><?= $cust->fName; ?></td>
            <td><?= $cust->lName; ?></td>
            <td><?= $cust->email; ?></td>
            <td><?= $cust->pno; ?></td>
            <td>
              <a href="update_user.php?id=<?= $cust->id ?>" >Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $cust->id ?>" >Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    

  <!-- <div class="column side">
      <h2>Rate chart</h2>

    </div> -->

  </div>
</div>
  </body>
</html>
