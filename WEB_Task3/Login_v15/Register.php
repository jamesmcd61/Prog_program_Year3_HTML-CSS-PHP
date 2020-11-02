<!DOCTYPE html>
<!--Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 -->
<?php 

include_once("DBConn.php");

?>
<!--This design was found at :https://colorlib.com/wp/cat/login-forms/-->
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Register
					</span>
				</div>

				<form class="login100-form validate-form" action="Register.php" name="myform" method="POST">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Name</span>
						<input class="input100" type="text" name='username' placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Surname</span>
						<input class="input100" type="text" name='surname' placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="text" name='email' placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name='password' placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit" name="submit" ></a>
							Register
						</button>
					</div>
					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="index2.php" class="txt1" name="register">
								Back
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php
	include_once("DBConn.php");
	//If statement to see that they have entered stuff in
	 if($_POST['username'] != null && $_POST['surname'] != null&& $_POST['email'] != null&& $_POST['password'] != null)
	{
		//Grabbing data
		$username= $_POST['username'];
		$surname= $_POST['surname'];
		$email= $_POST['email'];
		$password = $_POST['password'];
		//Hashing the password
		$Pass = md5($password);
		echo "$username,$surname,$email,$password,";
		//setting up database variables
		$sqlInsP = "Insert into tbl_user (User_Name, Surname, Password, Email) values ('$username','$surname','$Pass','$email')";
		$QresultA = $DBConnect->query($sqlInsP);

		//user Created
		echo "<script> alert('Created successfully');window.location='Register.php'</script>";
		$QresultA->close();	
	
	}
	?>


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>