<?php

  include "includes/config.php";

  $fName = $lName = $uName = $uPass = $uEmail = $err = $uNameInDB = "" ;
	
	
	/* mysqli_real_escape_string() helps prevent sql injection */
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(!empty($_POST['name'])){
      $fName = mysqli_real_escape_string($con, $_POST['name']);
    }
   
    if(!empty($_POST['email'])){
      $uName = mysqli_real_escape_string($con, $_POST['email']);
    }
    if(!empty($_POST['password'])){
      $uPass = mysqli_real_escape_string($con, $_POST['password']);
      $uPassToDB = password_hash($uPass, PASSWORD_DEFAULT);
    }
    if(!empty($_POST['mobile'])){
      $uEmail = mysqli_real_escape_string($con, $_POST['mobile']);
    }

    $sqlUserCheck = "SELECT email FROM user WHERE email = '$uName'";
    $result = mysqli_query($con, $sqlUserCheck);

    while($row = mysqli_fetch_assoc($result)){
      $uNameInDB = $row['email'];
    }

    if($uNameInDB == $uName){
      $err = "UserName already exists!";
    }
    else{
      $sql = "INSERT INTO user (name, email, mobile, password)
              VALUES ('$fName','$uName','$uEmail', '$uPassToDB');";

      mysqli_query($con, $sql);
      header("location: login.php");
    }
  }

?>

<html>
<head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
	<section >
		<aside id="sidebar">
			<h4>Create your account</h4>
		
			<form class="login" method="post" action="registration.php">
	
				<div >
					<div class="textbox">
					<input type="text" name="name" value="" placeholder="Name" required>
					</div>
					<div class="textbox">
					<input type="email" name="email" value="" placeholder="Email ID" required>
					</div>
					<div class="textbox">
					<input type="text" name="mobile"placeholder="Mobile Number">
					</div>
					<div class="textbox">
					<input type="password" name="password" placeholder="Password">
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
				<input type=button onClick= "parent.location='login.php'"value="Back">
				</div>
	</section>

	<footer >
	 	<div>
      		<p>By logging in you agree to our <span style="color: #00ff00 ;font-weight:bold">Terms and Conditions</span> and <span style="color:#00ff00;font-weight:bold">Privacy Policy </span> </p>
        </div>
    </footer>
   


</body>
</html>
