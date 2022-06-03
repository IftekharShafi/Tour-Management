<?php
$rand=rand(11111, 899999999);
$image= 'uploads/' .$rand.$_FILES['image']['name'];
$upload= '../uploads/' .$rand. $_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'], $upload);

	$title = $_POST['title'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	$price = $_POST['price'];

	include('../includes/config.php');

	$sql ="INSERT INTO packages (id, title, description, type, price, image)
						  VALUES(NULL, '$title', '$description', '$type', '$price', '$image')";
	mysqli_query($con, $sql);

	header('Location: index.php');



?>