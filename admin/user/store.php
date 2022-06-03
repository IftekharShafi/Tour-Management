
<?php
include('../includes/config.php');

if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	$sql ="INSERT INTO user (id, name, email, mobile)
						  VALUES(NULL, '$name', '$email', '$mobile')";
	$result= mysqli_query($con, $sql);
	
	header('Location: index.php');

}

?>