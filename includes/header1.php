<?php
$url='http://localhost:8080/travel/';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>admin/assets/css/style.css">
  <style type="text/css">
    body{
  font: 20px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#ffffff;  
}

.container{
  width:90%;
  margin:auto;
  
}
ul{
  margin:0;
  padding:0;
}


 h2
{
  font-family: 'Oswald', sans-serif;
  letter-spacing: 1px;
   padding: 0;

}
.container #title
{
  height: 1.4em;
  padding-bottom: 5px;
  font-family: 'Oswald', sans-serif;

}
.container #title1
{
  float: right;
  height: .1em;
    margin-top:-25px;
    color:#3FACCF;
    font-family: 'Oswald', sans-serif;
    letter-spacing: 1px;

}
#header 
{
 /*background:#4DB321;
  color:#ffffff;
  padding-top:5px;
  height: 60px;*/
   background:#4DB321;
  color:#ffffff;
  padding-top:10px;
  margin-top: 30px;
  min-height:62px;

}
#header a
{
  color:#ffffff;
  text-decoration:none;
  font-size:16px;
  padding-top: -10px;

}
#header li
{
   float:left;
  display:inline;
  padding: 0 1px 0 15px;


}
#header a:hover{
  color:#cccccc;
  font-weight:bold;
}
#header nav{
  margin-top:0px;
}






  </style>
</head>
<body>
  <div>
  <section >
    <div class="container">
      <h2 id="title"><span style="color:#5792BA;">Tourism</span>
        <span style="color: #4DB321;">Management System </span>  
      </h2>
      <h3 id="title1">Save Time & Money</h3>
    </div>
  </section>
  <section id="header">
    <div class="container">
      <nav>
          <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="package.php">Package</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="bus/reserved.php">Bus</a></li>
            <li><a href="terms.php">Terms of Use</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </nav>
        
        
        </div>
      
    </div>
  </section>
</div>
