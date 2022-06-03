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

	$sqlUserCheck = "SELECT username, password FROM admin WHERE username = '$uName'";
	$result = mysqli_query($con, $sqlUserCheck);
	$rowCount = mysqli_num_rows($result);

	if($rowCount < 1){
		$message = "User does not exist!";
	}
	else{
		while($row = mysqli_fetch_assoc($result)){
			$uPassInDB = $row['password'];

			if(password_verify($uPass, $uPassInDB)){
				$_SESSION['username'] = $uName;
				header("Location: index.php");
			}
			else{
				$message = "Wrong Password!";
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" type="text/css" href="css1/adminlogin.css">   
</head>
<body>
    <div class="login-box">
    <img src="img/avatar.png" class="avatar">
        <h1>Login Here</h1>
            <div >
            <input  style="background-color: red; color: white;" type=button onClick= "parent.location='../home.php'"value="Back to Home">
            </div>

            <form action="login.php" method="POST">
            <p>Username</p>
            <input type="text" name="u_name" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="u_pass" placeholder="Enter Password" required>
            <input type="submit" name="login" value="Login">
            <div class="button2">
           <!-- <input  type=button onClick="parent.location='registration.php'"value="Registration">
            </div>
            <a href="#">Forget Password</a>    
            </form>-->
        
        
        </div>
</body>
</html>