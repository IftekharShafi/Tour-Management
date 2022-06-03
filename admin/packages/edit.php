<?php
session_start();

include('../includes/config.php');
if(isset($_GET['id']))
{


    $id =$_GET['id'];
    $sql ="SELECT * FROM packages WHERE id = '$id' ";
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_assoc($result);

}


include('../includes/header.php'); 

?>


<a class="btn btn-success" href="index.php"> Back </a>
<br><br>

<div class="content">
	<h1>Update Package</h1>

		<form method="POST" enctype=multipart/form-data  action="update.php?id=<?php echo $row['id']; ?>">

          <div class="form-group">
            <label for="Title">Package Title</label>
            <input type="text" class="form-control" id="title" value="" placeholder="Package Title" name="title">
          </div>

          <div class="form-group">
            <label for="Package Description">Package Description</label>
            <textarea type="text" class="form-control" id="description" value="<?php echo $row['description'];?>" rows="10" name="description"></textarea>
          </div>

          <div class="form-group">
            <label for="Package Type">Package Type</label>
            <input type="text" class="form-control" id="type" value="" placeholder="Package Type"  name="type">
          </div>
          <div class="form-group">
            <label for="Package Price">Package Price</label>
            <input type="text" class="form-control" id="price" value="" placeholder="Package Price" name="price">
          </div>
          <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control" id="image"  name="image">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

		  
</div>


<?php include('../includes/footer.php'); ?>