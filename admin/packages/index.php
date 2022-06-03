<?php
	include('../includes/config.php');
	$sql ="select * from packages";
	$result= mysqli_query($con,$sql);

?>


<?php include('../includes/header.php'); ?>


<a class="btn btn-success" href="create.php"> +ADD Package </a>
<br><br>

<div class="content">
	<h1>Package List</h1>

		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Type</th>
				<th>Price</th>
				<th>Image</th>
				<th>Action</th>
			</thead>

			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td><?php echo $row['id']; ?> </td>
				<td><?php echo $row['title']; ?> </td>
				<td><?php echo $row['description']; ?> </td>
				<td><?php echo $row['type']; ?> </td>
				<td><?php echo $row['price']; ?> </td>
				<td><img src="../<?php echo $row['image']; ?>"width='100'></td>
				<td>
					<a class="btn btn-success btn-sm" href="view.php?id=<?php echo $row['id']; ?>"> View </a>
					<a class="btn btn-info btn-sm" href="edit.php"> Edit </a>
					<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"> Delete </a>
				</td>
			</tr>

			<?php } ?>


		 </table>      
</div>


<?php include('../includes/footer.php'); ?>