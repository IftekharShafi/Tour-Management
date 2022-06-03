<?php
  session_start();
  if(!isset($_SESSION["email"]))
  {
    header("Location: login.php");
  }
  $n_passToDB = "";
	include "includes/config.php";
  $o_pass = $n_pass = $message = "";
  $u_name= $_SESSION['email'];

  if($_SERVER["REQUEST_METHOD"] == "POST"){
  
    if(!empty($_POST['o_pass'])){
      $o_pass = mysqli_real_escape_string($con, $_POST['o_pass']);
    }
    if(!empty($_POST['n_pass'])){
      $n_pass = mysqli_real_escape_string($con, $_POST['n_pass']);
      $n_passToDB = password_hash($n_pass, PASSWORD_DEFAULT);
    }
    if(!empty($_POST['rn_pass'])){
      $rn_pass = mysqli_real_escape_string($con, $_POST['rn_pass']);
    }

    $sqlChangePass = "UPDATE user SET password = '$n_passToDB' WHERE email = '$u_name'";

    if(($o_pass == $_SESSION['password']) && ($o_pass = $n_pass))
    {
      $result = mysqli_query($con, $sqlChangePass);
      $message = "Password Changed Successfully!";
      $_SESSION['password'] = $n_pass;
      session_destroy();
      header("Location: login.php");
    }
    else
    {
      $message = "Wrong Old Password!";
    }
  }

?>











<html>
<head>
	<title>Change Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/c_pass.css">
</head>
<body>
	<section >
		<aside id="sidebar">
			<h4>Change Your Password</h4>
		
			<form class="login" name="changePassword" method="post" action="changepass.php">
	
				<div>
					<div class="textbox">
					<input type="password" name="o_pass" placeholder="Old Password">
					</div>

					<div class="textbox">
					<input type="password" name="n_pass" placeholder="New Password">
					</div>
					<!--autocomplete="off" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,}"-->
					<div class="textbox">
					<input type="password" name="rn_pass" placeholder="Confirm New Password" autocomplete="off" required>
					</div>
					<div class="button1">
					<input type="submit" name="submit" value="CHANGE PASSWORD"  style="color: white">
					</div>

				</div>
			</form>
		</aside>
				<div class="back">
				<input type=button onClick= "parent.location='index.php'"value="Back">
				</div>
	</section>

	<!--<footer >
	 	<div>
      		<p>By logging in you agree to our <span style="color: #00ff00 ;font-weight:bold">Terms and Conditions</span> and <span style="color:#00ff00;font-weight:bold">Privacy Policy </span> </p>
        </div>
    </footer>-->
   


</body>
</html>

