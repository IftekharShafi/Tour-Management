
<?php


	include('../includes/config.php');
	$sql ="select * from booking";
	$result= mysqli_query($con,$sql);

?>


<?php include('../includes/header.php'); ?>



<div class="content">
	<h1>Booking List</h1>

		<table class="table table-bordered">
			<thead>
				<th>BID</th>
				<th>Name</th>
				<th>Description</th>
				<th>Date</th>
				<th>Package ID</th>
				<th>Action</th>
			</thead>

			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td><?php echo $row['bid']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['description']; ?> </td>
				<td><?php echo $row['date']; ?> </td>
				<td><?php echo $row['pid']; ?> </td>

				<td>

					<a class="btn btn-danger btn-sm" href="delete.php?bid=<?php echo $row['bid']; ?>" onclick="return confirm('Are you sure?')"> Delete </a>
				</td>
			</tr>

			<?php } ?>


		 </table>      
</div>


<?php include('../includes/footer.php'); ?>