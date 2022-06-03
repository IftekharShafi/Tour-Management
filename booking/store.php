<?php



	$name = $_POST['name'];
	//$email = $_POST['email'];
	//$mobile = $_POST['mobile'];
	$description = $_POST['description'];
	$date = $_POST['date'];
	$pid = $_POST['id'];

	include('../includes/config.php');

	$sql ="INSERT INTO booking (bid, name, description, date, pid )
						  VALUES(NULL, '$name', '$description', '$date', '$pid')";
	mysqli_query($con, $sql);

	header('Location: index.php');



?>