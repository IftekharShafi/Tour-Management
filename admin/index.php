<?php
session_start();

if(!isset($_SESSION['username']))
header('location:login.php');

?>

<?php include('includes/header.php'); ?>

<html>
<body>
	<h2 style="color:red;">Welcome To Admin Panel, <?php echo $_SESSION['username']; ?></h2>
    
</body>
</html>
        
<?php include('includes/footer.php'); ?>