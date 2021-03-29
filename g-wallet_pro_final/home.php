<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<title>G-Wallet</title>
	<style media="screen">
	.full-page{
		height: 100%;
		width: 100%;
		background-image: linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(home.jpg);
		background-size: cover;
		background-position: center;
		position: absolute;
	}
  img{
    width: 80px;
    height: 80px;
    border-radius: 100px;
  }
	</style>

<body>


	<div class="full-page">
		<div class="navbar">
			<img src="logo.jpg"  alt="">
			<!--navigation bar-->

			<nav>
				<ul id="MenuItems">
					<li> <a href= "home.php"> Home</a></li>
					<li> <a href="about.html"> About us</a></li>
					<li><div class="dropdown">
              <button class="dropbtn"> Services
                    <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                  <a class="dropped" href="service1.html"><p>Buy and Store Gold</p></a>
                  <a href="service2.html">View Gold Transactions</a>
              </div></li>
					<li> <a href="contact.html"> Contact us</a></li>
          <li> <a href="feedback.php"> Feedback</a></li>
					<li><div class="dropdown">
    					<button class="dropbtn"> Login or Register
      							<i class="fa fa-caret-down"></i>
    					</button>
    					<div class="dropdown-content">
      						<a class="dropped" href="admin_login.php"><p>Admin</p></a>
      						<a href="user_login_registration.php">User</a>

    					</div>
  					</div>
  					</li>
				</ul>
			</nav>
		 </div>
	</div>

	<?php
		if(isset($_POST['admin_login'])){
			header("Location:admin_login.php");
		}
		if(isset($_POST['user_login'])){
			header("Location:user_login_registration.php");
		}
	?>
</body>
</html>

































































































































































































































































































































<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: transparent;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  border-radius: 20px;
}

.dropdown .dropbtn , input{
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn 	{
    background-color: rgba(255,192,203,0.5);
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(255,192,203,0.5);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
	color: #ddd;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {

  display: block;
  border-radius: 20px;
}

</style>
</head>
<body>





</body>
</html>
