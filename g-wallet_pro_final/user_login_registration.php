<!DOCTYPE html>
<html>
<head>
	<title>Log in and Registration</title>
	<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>
	<div class="full-page">
		<div  class="login-page">
			<div class="button-box">
				<div id="btn"> </div>
				<button type="button" onclick="login()" class="toggle-btn">Log in </button>
				<button type="button" onclick="register()" class="toggle-btn">Register </button>

			</div>


			<form method= "POST" action="user_login.php" class="input-group" id="login">
				<center>
				<input type="text" name="email" placeholder=" Email Id" required><br><br>
				<input type="password" name="password" placeholder=" Enter Password" required><br><br>
				</center>
				
				<button type="submit" name="LogIn" class="submit-btn">log in </button>
				
			</form>




			<form method= "POST" action="user_register.php" class="input-group" id="register" >
				<center>
				<input type="text" name="fName" placeholder=" First Name" required>
				<input type="text" name="lName" placeholder=" Last Name" required>
				<input type="email" name="email" placeholder=" Email Id" required><br>
				<input id="ind" value="+91"disabled><input type="tel" name="pno" placeholder=" Phone Number" required>
				<input type="password" name="password"   placeholder=" Password" required>
				
				<input type="password" name="password2" placeholder=" Confirm Password" required><br><br><br>
				</center>
				
				<button type="submit" name="register_btn" class="submit-btn">Register </button>


			</form>

		</div>
	</div>


	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}

    </script>
    <script type="text/javascript">

    	var modal= document.getElementById("login-from");
    	window.onclick = function(event)
    	{
    		if (event.target == modal)
    		{
    			modal.style.display ="none";.
    		}
    	}


    </script>
	</div>


</body>
</html>
