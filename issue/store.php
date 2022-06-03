<?php



	$name = $_POST['name'];
	//$email = $_POST['email'];
	//$mobile = $_POST['mobile'];
	$description = $_POST['description'];
	$date = $_POST['date'];


	include('../includes/config.php');

	$sql ="INSERT INTO issue (id, name, description, date )
						  VALUES(NULL, '$name', '$description', '$date')";
	mysqli_query($con, $sql);

	header('Location: index.php');



?>