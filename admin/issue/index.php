<?php
	include('../includes/config.php');
	$sql ="select * from issue";
	$result= mysqli_query($con,$sql);

?>


<?php include('../includes/header.php'); ?>


<div class="content">
	<h1>Manage Issue</h1>

		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Issues</th>
				<th>Date</th>
				<th>Action</th>
			</thead>

			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td><?php echo $row['id']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['description']; ?> </td>
				<td><?php echo $row['date']; ?> </td>
				<td>
	
					<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"> Delete </a>
				</td>
			</tr>

			<?php } ?>


		 </table>      
</div>


<?php include('../includes/footer.php'); ?>