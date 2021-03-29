<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM gold_rate WHERE id=:id';
$statement = $connection->prepare($sql);
$gold_rate = $statement->fetchAll(PDO::FETCH_OBJ);
$statement->execute([':id' => $id ]);
$rate= $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['day'])  && isset($_POST['gr22k']) && isset($_POST['gr24k']) ) {
  $day = $_POST['day'];
  $gr22k = $_POST['gr22k'];
  $gr24k = $_POST['gr24k'];

  $password = $_POST['password'];
  $sql = 'UPDATE gold_rate SET day=:day, gr22k=:gr22k, gr24k=:gr24k, gr=:gr24k WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':day' => $day, ':gr22k' => $gr22k, ':gr24k' => $gr24k, ':gr' => $gr24k, ':id' => $id])) {
    header("Location: gold_edit.php");
  }


 
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Change Gold Rate</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style type="text/css">
      label{
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
    <!--sidebar end-->
  </div>
    <div class="content">
      <div class="row">

    </div>
  <div class="column middle">
    <h2>Enter the new rate</h2>
    <form method="post" >
        <div class="form-group">
          <label for="name">Date</label><br>
          <input value="<?= $rate->day; ?>" type="date" name="day" id="name" class="form-control"><br>
        </div>
        <div class="form-group">
          <label for="gr22k">gr22k</label><br>
          <input type="number" value="<?= $rate->gr22k; ?>" name="gr22k" id="name" class="form-control"><br>
        </div>
        <div class="form-group">
          <label for="gr24k">gr24k</label><br>
          <input value="<?= $rate->gr24k; ?>" type="number" name="gr24k" id="gr24k" class="form-control"><br><br>
        </div>
        
        <div class="form-group">
          <button type="submit" name="submit" >edit rate</button>
        </div>
      </form>
  </div>


  </div>




    

  </body>
</html>
