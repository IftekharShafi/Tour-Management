<?php
session_start();

if(!isset($_SESSION['email']))
header('location:login.php');

?>

<?php include('includes/header.php'); ?>

<html>
<body>
    <html>
<body>
	<h2 style="color:red;">Welcome To User: <?php echo $_SESSION['email']; ?></h2>
    
</body>
</html>
    
    
</body>
</html>
        
