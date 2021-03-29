<?php
require 'db.php';
$sql = 'SELECT * FROM gold_rate';
$statement = $connection->prepare($sql);
$statement->execute();
$gold_rate = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<?php
require 'db.php';
$message = '';
if (isset ($_POST['fName'])  && isset($_POST['lName']) && isset($_POST['email']) && isset ($_POST['pno']) &&isset ($_POST['password']) ) {

  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $email = $_POST['email'];
  $pno = $_POST['pno'];
  $password = $_POST['password'];

  $sql = 'INSERT INTO user_data(fName, lName, email, pno, password) VALUES(:fName, :lName, :email, :pno, :password)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':fName' => $fName, ':lName' => $lName, ':email' => $email, ':pno' => $pno, ':password' => $password])) {
    $message = 'data inserted successfully';
  }



}
?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add a User</title>
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
    <!--sidebar end-->
  </div>
    <div class="content">
      <div class="row">

    </div>
  <div class="column middle">
    <div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Add a User</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      
      <form method="post" action="">
        <div class="form-group">
          <label for="name">First Name</label><br>
          <input type="text" name="fName" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Last Name</label><br>
          <input type="text" name="lName" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email id</label><br>
          <input type="text" name="email" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Phone no</label><br>
          <input type="tel" name="pno" id="p" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Password</label><br>
          <input type="password" name="password" id="email" class="form-control"><br> <br>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>
  </div>


  </div>




    

  </body>
</html>
