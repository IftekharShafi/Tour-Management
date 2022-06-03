

<?php
	include('../includes/config.php');

	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		$sql ="DELETE FROM user where id ='$id' ";
		$result= mysqli_query($con, $sql);
		
		header('Location: index.php');

	}

?>