
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<form method="post" action="insert.php">



	<div class="input-group">
		<label>UserType</label>
		<input type="text" name="usertype">
	</div>
	
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="userpassword">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	
	<p>
		Already a member? <a href="../admin/index.php">Sign in</a>
	</p>
</form>
</body>
</html>