<?php
$con=mysqli_connect("localhost","root","","medallion");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO user (user_account, user_password)
VALUES
('$_POST[usertype]','$_POST[userpassword]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con);
?>