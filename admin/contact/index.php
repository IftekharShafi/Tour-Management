<?php
	include('../includes/config.php');
	$sql ="select * from contact";
	$result= mysqli_query($con,$sql);

?>


<?php include('../includes/header.php'); ?>


<div class="content">
	<h1>Package List</h1>

		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>Message</th>
				<th>Action</th>
			</thead>

			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td><?php echo $row['id']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['email']; ?> </td>
				<td><?php echo $row['mobile']; ?> </td>
				<td><?php echo $row['msg']; ?> </td>
				<td>
	
					<a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')"> Delete </a>
				</td>
			</tr>

			<?php } ?>


		 </table>      
</div>


<?php include('../includes/footer.php'); ?>