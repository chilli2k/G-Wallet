<?php
  require 'db.php';
  $gold = 0;
  $gr = 0;
  $balance=0;
  $bought = "bought";
  //ȩcho "In usertransaction";  
  if (isset($_POST['submit'])) {
    //echo "I came here and is set";
    $email = $_POST['email'];
    $amt =  $_POST["amt"];
    $password =  $_POST["password"] ;


    /*fetching gold rate*/
    $sql = 'SELECT * FROM gold_rate where id=3';
    $statement = $connection->prepare($sql);
    $statement->execute();
    $contact = $statement->fetchAll(PDO::FETCH_OBJ);
    foreach($contact as $rate){
      echo "I'm inside for loop";
      echo $rate->id;
      echo $rate->gr;
      $gr = (int)$rate->gr;
      //echo $rate['id'];
    }
    echo $gr;
    echo " gold rate For done";

    /*fetching balance*/
    $sql1 = "SELECT * FROM transaction where email='$email' ORDER BY balance DESC LIMIT 1";
    echo $sql1;
    $statement1 = $connection->prepare($sql1);
    $statement1->execute();
    $contact1 = $statement1->fetchAll(PDO::FETCH_OBJ);
    foreach($contact1 as $rate1){
     // echo "I'm inside for loop";
      echo $rate1->balance;
      $balance = (float)$rate1->balance;
      //echo $rate['id'];
    }
    //echo $balance;
    //echo "balance For done";

    //calculating the weight of gold
    $gold = $amt/$gr;
    $new_balance = $balance + $gold;
    $date = date('m/d/Y h:i:s a', time());
    
    //insert the new transaction
    $db=mysqli_connect("localhost","root","","g-wallet");
    $sql="INSERT INTO transaction(email,trans_date,action,amt,balance) VALUES('$email','$date', '$bought' ,'$amt','$new_balance')";
    mysqli_query($db,$sql);
    echo "Bought successfully!!";
   
    header("location:user_dashboard.php"); 
    
}
  
?>
