<?php
include "includes/config.php";

session_start();
$uPass = $uName = $message = "";

/* mysqli_real_escape_string() helps prevent sql injection */
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(!empty($_POST['u_name'])){
		$uName = mysqli_real_escape_string($con, $_POST['u_name']);
	}
	if(!empty($_POST['u_pass'])){
		$uPass = mysqli_real_escape_string($con, $_POST['u_pass']);
	}

	$sqlUserCheck = "SELECT email, password FROM user WHERE email = '$uName'";
	$result = mysqli_query($con, $sqlUserCheck);
	$rowCount = mysqli_num_rows($result);

	if($rowCount < 1){
		$message = "User does not exist!";
	}
	else{
		while($row = mysqli_fetch_assoc($result)){
			$uPassInDB = $row['password'];

			if(password_verify($uPass, $uPassInDB)){
				$_SESSION['email'] = $uName;
				$_SESSION['password'] = $uPass;
				header("Location: index.php");
			}
			else{
				$message = "Wrong Password!";
			}
		}
	}
}

?>

<html>
<head>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<section>
		<aside id="sidebar">
			<h4>Signin with your account</h4>
		
			<form class="login" method="POST" action="login.php">
				<div >
					<div class="textbox">
					<input type="email" name="u_name"placeholder="Enter Email" required>
					</div>
					<br>
					<div class="textbox">
					<input type="password" name="u_pass"placeholder="Password" required>
					</div>
					<br>
					<div class="button1">
					<input type="submit" name="login" value="SIGNIN"  style="color: white">
					</div>
					<div class="or">
					<h4 align="center">OR</h4>
					</div>
					<div class="button2">
					<input  type=button onClick= "parent.location='registration.php'" value="Registration" style="color: white">
					</div>
				</div>
			</form>
		</aside>
					<div class="back">
					<input type=button onClick= "parent.location='home.php'"value="Back to Home">
					</div>
	</section>

	<footer >
	 	<div>
      		<p>By logging in you agree to our <span style="color: #00ff00 ;font-weight:bold">Terms and Conditions</span> and <span style="color:#00ff00;font-weight:bold">Privacy Policy </span> </p>
        </div>
    </footer>
   
</body>
</html>