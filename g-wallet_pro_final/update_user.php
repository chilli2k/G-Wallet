<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM user_data WHERE id=:id';
$statement = $connection->prepare($sql);
$user_data = $statement->fetchAll(PDO::FETCH_OBJ);
$statement->execute([':id' => $id ]);
$cust= $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['fName'])  && isset($_POST['lName']) && isset($_POST['email']) && isset ($_POST['pno']) &&isset ($_POST['password']) ) {
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $pno = $_POST['pno'];
  $password = $_POST['password'];
  $sql = 'UPDATE user_data SET fName=:fName, lName=:lName, email=:email, pno=:pno WHERE id=:id';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':fName' => $fName, ':lName' => $lName, ':email' => $email, 'pno' => $pno, ':id' => $id])) {
    header("Location: edit_user.php");
  }
 
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin_Dashboard</title>
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
    <div class="content">
      <div class="row">

    </div>
  <div class="column middle">
    <center>
    <h2>Update Info</h2>
    <form method="post" >
        <div class="form-group">
          <label for="name">First Name</label><br>
          <input value="<?= $cust->fName; ?>" type="text" name="fName" id="name" class="form-control">
        </div><br>
        <div class="form-group">
          <label for="email">Last Name</label><br>
          <input type="text" value="<?= $cust->lName; ?>" name="lName" id="name" class="form-control">
        </div><br>
        <div class="form-group">
          <label for="name">Email.</label><br>
          <input value="<?= $cust->email; ?>" type="text" name="email" id="email" class="form-control">
        </div><br>
        <div class="form-group">
          <label for="name">Phone number</label><br>
          <input value="<?= $cust->pno; ?>" type="text" name="pno" id="name" class="form-control">
        </div><br>
        <div class="form-group">
          <label for="name">Password</label><br>
          <input value="<?= $cust->password; ?>" type="text" name="password" id="name" class="form-control">
        </div><br>
        <div class="form-group">
          <button type="submit" >Update User</button><br>
        </div><br><br>
      </form>
      </center>
  </div>


  </div>


  </body>
</html>
