<?php

  include "includes/config.php";

  $fName = $lName = $uName = $uPass = $uEmail = $err = $uNameInDB = "" ;
	
	
	/* mysqli_real_escape_string() helps prevent sql injection */
  if($_SERVER["REQUEST_METHOD"]=="POST"){
  
    if(!empty($_POST['user_name'])){
      $uName = mysqli_real_escape_string($con, $_POST['user_name']);
    }
    if(!empty($_POST['user_pass'])){
      $uPass = mysqli_real_escape_string($con, $_POST['user_pass']);
      $uPassToDB = password_hash($uPass, PASSWORD_DEFAULT);
    }
    if(!empty($_POST['user_email'])){
      $uEmail = mysqli_real_escape_string($con, $_POST['user_email']);
    }

    $sqlUserCheck = "SELECT username FROM admin WHERE username = '$uName'";
    $result = mysqli_query($con, $sqlUserCheck);

    while($row = mysqli_fetch_assoc($result)){
      $uNameInDB = $row['username'];
    }

    if($uNameInDB == $uName){
      $err = "UserName already exists!";
    }
    else{
      $sql = "INSERT INTO admin ( username, email, password)
              VALUES ('$uName','$uEmail', '$uPassToDB');";

      mysqli_query($con, $sql);
      header("Location: login:php");
    }
  }

?>

<html lang="en" dir="ltr">
 <head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css1/register.css">
</head>
<body>
	<section >
		<aside id="sidebar">
			<h4>Create your account</h4>
		
			<form class="login" method="POST" action="registration.php">
				
				<div >
					<div class="textbox">
					<input type="text" name="user_name" value="" placeholder="Username" required>
					</div>
					<div class="textbox">
					<input type="email" name="user_email" value="" placeholder="Email ID" required>
					
					<div class="textbox">
					<input type="password" name="user_pass" placeholder="Password">
					</div>
					<!--autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}"-->
					<div class="textbox">
					<input type="password" name="password_2" placeholder="Confirm Password" autocomplete="off" required>
					</div>
					<div class="button1">
					<input type="submit" name="register" value="CREATE ACCOUNT"  style="color: white">
					</div>

				</div>
			</form>
		</aside>
				<div class="back">
				<input type=button onClick= "parent.location='../home.php'"value="Back">
				</div>
	</section>

	<footer >
	 	<div>
      		<p>By logging in you agree to our <span style="color: #00ff00 ;font-weight:bold">Terms and Conditions</span> and <span style="color:#00ff00;font-weight:bold">Privacy Policy </span> </p>
        </div>
    </footer>
</html>
