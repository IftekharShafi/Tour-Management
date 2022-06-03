<?php 
include('includes/config1.php');
include('includes/database.php');
?>


<?php 
 $db = new Database();
if(isset($_POST['submit'])){
 $name  = mysqli_real_escape_string($db->link, $_POST['name']);
 $email = mysqli_real_escape_string($db->link, $_POST['email']);
 $mobile = mysqli_real_escape_string($db->link, $_POST['mobile']);
 $msg = mysqli_real_escape_string($db->link, $_POST['msg']);
 if($name == '' || $email == '' || $mobile == '' || $msg == ''){
  $error = "Field must not be Empty !!";
 } else {
  $query = "INSERT INTO contact(name, email, mobile, msg) 
   Values('$name', '$email', '$mobile', '$msg')";
  $create = $db->insert($query);
 }
}
?>

<?php 
if(isset($error)){
 echo "<span style='color:red'>".$error."</span>";
}
?>
















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="./css/contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Contact</title>
  <style type="text/css">

#admin nav{
  float: right;
}
.login
{
  margin-top: -250px;
}
 #sidebar1 div
{
  margin-left: 20px;
    color: #4E4E4E;

}
#map
{
  margin-top: -120px;
 
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
        <div id="admin">
          <nav>
            <li><a href="admin/login.php"><b>Admin Login</b></a></li>
          </nav>
      
    </div>
  </section>
</div>

     <section id="showcase">
      <div class="container">
        <h1>Tour Management System</h1>
      </div>
    </section>
    <div id="about_h">
      <h3>Contact US</h3>
    </div>
    <div>
      <aside id="sidebar1">
        <div>
          <h4>Head Office:</h5>
          <div>
            <P>House # 3, Road # 15, Sector # 4,<br>
            Uttara, Dhaka-1230, Bangladesh.
            </P>
            <p>
            Phone:  +880-2-9820431-433</p>
            <p>Fax: +88-2-9820754</p>
          </div>
        </div>
      </aside>
		<aside id="sidebar">
		
        <form class="login" action="contact.php" method="post">
         <h4>Contact Form</h4>

				<div >
					<div class="textbox">
					<input type="text" name="name"placeholder=" Your name">
					</div>
					<div class="textbox">
					<input type="email" name="email"placeholder=" Your Email Address">
					</div>
					<div class="textbox">
					<input type="number" name="mobile"placeholder=" Your Phone Number">
					</div>
				<!--	<div class="textbox">
					<input type="text" name="subject"placeholder=" Suject">
					</div>-->
					<div class="textbox">
					<input type="text" name="msg"placeholder=" Message">
					</div>
					
					<div class="button1">
					<input type="submit" name="submit" value="Send"  style="color: white">
					</div>
				</div>
			</form>
		</aside>
    </div>
  <div id="map">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14599.594381298903!2d90.42194549999999!3d23.822204699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc47f7c3e8e2263f2!2sAmerican%20International%20University-Bangladesh!5e0!3m2!1sen!2sbd!4v1575037828536!5m2!1sen!2sbd" width=100% height="280" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    <?php include('includes/footer1.php');?>


</body>
</html>