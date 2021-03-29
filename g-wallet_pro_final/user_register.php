<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","g-wallet");
if(isset($_POST['register_btn']))
{
    $fName=mysqli_real_escape_string($db,$_POST['fName']);
    $lName=mysqli_real_escape_string($db,$_POST['lName']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $pno=mysqli_real_escape_string($db,$_POST['pno']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);
    $query = "SELECT * FROM user_data WHERE email = '$email'";
    $result=mysqli_query($db,$query);
      if($result)
      {

        if( mysqli_num_rows($result) > 0)
        {

                echo '<script language="javascript">';
                echo 'alert("Email already exists")';
                echo '</script>';
        }

          else
          {
            $password = $_POST['password'];
            // if (preg_match("#.^(?=.{6,20})(?=.[a-z])(?=.[A-Z])(?=.[0-9]).*@$#", $password) && strlen( $password >= 7 )){
            // echo "Your password is satisfies the condition.";
            if($password==$password2)
            {           
                $sql="INSERT INTO user_data(fName, lName, email, pno, password ) VALUES('$fName','$lName', '$email' ,'$pno','$password')";
                mysqli_query($db,$sql);
                 echo '<script type="text/javascript">';
                echo ' alert("registration successfull , please login ")';  //not showing an alert box.
                echo '</script>';
                header("location:user_login_registration.php");  //redirect home page
            }
             else {
            echo "password doesnot match the limitations";
                echo '<script type="text/javascript">';
                echo ' alert("Password doesnot match ")';  //not showing an alert box.
                echo '</script>';
                // header("location:user_login_registration.php"); 

            }
            
            }
            //  else {
            
            //     echo '<script type="text/javascript">';
            //     echo ' alert("password doesnot meet the limitations")';  //not showing an alert box.
            //     echo '</script>';
            //      // header("location:user_login_registration.php"); 
            // }
        }
    
}
?>





