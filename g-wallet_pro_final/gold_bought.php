<?php
require 'db.php';
session_start();
$sql = 'SELECT * FROM gold_rate';
$statement = $connection->prepare($sql);
$statement->execute();
$gold_rate = $statement->fetchAll(PDO::FETCH_OBJ);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Gold Bought</title>
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
    <?php  
    //prompt function
    function prompt($prompt_msg){
        echo("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

        $answer = "<script type='text/javascript'> document.write(answer); </script>";
        return($answer);
    }

    //program
    $prompt_msg = "Please type your email.";
    $email = prompt($prompt_msg);

    $output_msg = "Hello there ".$email."!";
    echo($output_msg);
    ?>


    <h2>Transaction History</h2>

    <p><?php
    $db=mysqli_connect("localhost","root","","g-wallet");

    // Check connection
    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $email = $_SESSION['email'];
    $result = mysqli_query($db,"SELECT * FROM transaction where email='$email'");
    
    echo "<table border='1'>
    <tr>
    <th>Sl No</th>
    <th>Email</th>
    <th>Date</th>
    <th>Action</th>
    <th>Amount</th>
    <th>Vault Balance</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['transid'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['trans_date'] . "</td>";
    echo "<td>" . $row['action'] . "</td>";
    echo "<td>" . $row['amt'] . "</td>";
    echo "<td>" . $row['balance'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";



    mysqli_close($db);
    ?>
</p>

  </div>

  <div class="column side">
  <h2>Rate Chart</h2>
    <table class="gold-table">
  <thead>
    <tr>
      <th>id</th>
      <th>days</th>
      <th>22k(rate/gm)</th>
      <th>24k(rate/gm)</th>
    </tr>
  </thead>
  <?php foreach($gold_rate as $rate): ?>
              <tr>
                <td><?= $rate->id; ?></td>
                <td><?= $rate->day; ?></td>
                <td><?= $rate->gr22k; ?></td>
                <td><?= $rate->gr24k; ?></td>


              </tr>
    <?php endforeach; ?>
</table>
  </div>
</div>



    </div>

  </body>
</html>
