<?php 

session_start();
include('../includes/config.php');


$sql ="SELECT * FROM issue ";
$result=mysqli_query($con, $sql);

include('../includes/header.php');

?>


<a class="btn btn-success" href="index.php"> Back </a>
<br><br>

<div class="content">
	

		<form method="POST"  action="store.php">

         <!-- <div class="form-group">
            <label for="Title">Name</label>
            <input type="text" class="form-control" id="name"  placeholder="User Name" name="name">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email"  placeholder="Email" name="email">
          </div>

          <div class="form-group">
            <label for="Mobile No">Mobile No</label>
            <input type="text" class="form-control" id="mobile"  placeholder="Mobile No" name="mobile">
          </div>-->
			<div class="form-group">
			<label for="Email">UserName</label>
	    
	           <select name="name" class="form-control">
	        	<option><?php echo $_SESSION['email']; ?></option>
	            	

		        </select>
	         </div>
          <div class="form-group">
            <label for="Description">Give Issues </label>
            <textarea type="text" class="form-control" id="description" rows="10" name="description"></textarea>
          </div>
          <div class="form-group">
            <label for="Date">Date</label>
            <input type="date" class="form-control" id="date"  name="date">
          </div>
			

          

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

		     
</div>


