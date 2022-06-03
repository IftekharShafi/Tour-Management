<?php
$url='http://localhost:8080/travel/admin/';
$url1='http://localhost:8080/travel/';
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>assets/css/style.css">

    <title>Admin Panel</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $url; ?>index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>packages/index.php">Manage Package<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>user/index.php">Manage User<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $url; ?>issue/index.php">Manage Issues<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" name="logout" href="<?php echo $url1; ?>home.php">Logout</a>
      </li>
    </ul>

  </div>
  </div>
</nav>
  <div class="main-content"> 
   <div class="container">
    <div class="row clearfix">
      <div class="col-md-3">
        <ul class="list-group">
          <li class="list-group-item active">Left Menu</li>

          <li class="list-group-item">
          <a href="<?php echo $url; ?>packages/index.php">Manage Package</a>
          </li>

          <li class="list-group-item">
          <a href="<?php echo $url; ?>user/index.php">Manage User</a>
          </li>

          <li class="list-group-item">
          <a href="<?php echo $url; ?>contact/index.php">Manage Contact</a>
          </li>

          <li class="list-group-item">
          <a href="<?php echo $url; ?>booking/index.php">Manage Booking</a>
          </li>
          <li class="list-group-item">
          <a href="<?php echo $url; ?>issue/index.php">Manage Issues</a>
          </li>

          
        </ul>
      </div>
      <div class="col-md-9">