<?php include('../includes/header.php'); ?>


<a class="btn btn-success" href="index.php"> Back </a>
<br><br>

<div class="content">
	<h1>ADD New Package</h1>

		<form method="POST" enctype=multipart/form-data  action="store.php">

          <div class="form-group">
            <label for="Title">Package Title</label>
            <input type="text" class="form-control" id="title"  placeholder="Package Title" name="title">
          </div>

          <div class="form-group">
            <label for="Package Description">Package Description</label>
            <textarea type="text" class="form-control" id="description" rows="10" name="description"></textarea>
          </div>

          <div class="form-group">
            <label for="Package Type">Package Type</label>
            <input type="text" class="form-control" id="type"  placeholder="Package Type" name="type">
          </div>
          <div class="form-group">
            <label for="Package Price">Package Price</label>
            <input type="text" class="form-control" id="price"  placeholder="Package Price" name="price">
          </div>
          <div class="form-group">
            <label for="Image">Image</label>
            <input type="file" class="form-control" id="image"  name="image">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

		  
</div>


<?php include('../includes/footer.php'); ?>