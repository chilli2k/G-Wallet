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
    <title>Change Gold Rate</title>
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
          <a href="queries.php"><i class="fas fa-envelope"></i><span>Customer Queries</span></a>
    <!--sidebar end-->
  </div>
    <div class="content">
      <div class="row">

    </div>
  <div class="column middle">
    <h2>Rate Chart</h2>
    <table class="gold-table">
  <thead>
    <tr>
      <th>id</th>
      <th>days</th>
      <th>22k</th>
      <th>24k</th>
      <th>action</th>
    </tr>
  </thead>
  <?php foreach($gold_rate as $rate): ?>
              <tr>
                <td><?= $rate->id; ?></td>
                <td><?= $rate->day; ?></td>
                <td><?= $rate->gr22k; ?></td>
                <td><?= $rate->gr24k; ?></td>
                <td>
                <a href="change_gold_rate.php?id=<?= $rate->id ?>" >Edit</a> 
              
            </td>          
          </tr>
        <?php endforeach; ?>
      </table>

  </div>
  </div>


  </div>




    

  </body>
</html>
