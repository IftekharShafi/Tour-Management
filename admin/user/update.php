

<?php
include('../includes/config.php');

if(isset($_POST['submit']))
{
	$id = $_GET['id'];
	$name= $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];

	$sql ="UPDATE user SET name= '$name', email= '$email', mobile='$mobile' where id='$id' ";
	$result= mysqli_query($con, $sql);
	
	header('Location: index.php');

}

?>