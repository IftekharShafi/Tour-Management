<?php 
$id=$_GET['id'];
include('../includes/config.php');
 
$sql=" SELECT * FROM packages WHERE id='$id' ";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

include('../includes/header.php');

?>
<a class="btn btn-success" href="index.php"> Back </a>
<br><br>

<div class="content">
	<h1>ADD New Package</h1>

		<table class="table">
        <tr>
          <th>Title</th>
          <td><?php echo $data['title'] ?></td>
        </tr> 
        <tr>
          <th>Description</th>
          <td><?php echo $data['description'] ?></td>
        </tr>
        <tr>
          <th>Type</th>
          <td><?php echo $data['type'] ?></td>
        </tr>
        <tr>
          <th>Price</th>
          <td><?php echo $data['price'] ?></td>
        </tr>
        <tr>
          <th>Image</th>
          <td><img src="../<?php echo $data['image'] ?>" width='200'></td>
        </tr> 
    </table>

		  
</div>


<?php include('../includes/footer.php'); ?>