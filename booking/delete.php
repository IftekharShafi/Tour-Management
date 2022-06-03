
<?php
	include('../includes/config.php');

	if(isset($_GET['bid']))
	{
		$bid=$_GET['bid'];

		$sql ="DELETE FROM booking where bid ='$bid' ";
		$result= mysqli_query($con, $sql);
		
		header('Location: index.php');

	}

?>