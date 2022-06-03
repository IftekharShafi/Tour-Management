<?php
	include('../includes/config.php');
	$sql ="select * from booking";
	$result= mysqli_query($con,$sql);

?>


<?php include('../includes/header.php'); ?>


<a class="btn btn-success" href="create.php"> +ADD Booking </a>
<br><br>

<div class="content">

		<table class="table table-bordered">
			<thead>
				<th>ID</th>
				<th>UserName</th>
			
				<th>Description</th>
				<th>PID</th>
				<th>Date</th>
				<th>Action</th>
			</thead>

			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			
			<tr>
				<td><?php echo $row['bid']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				
				<td><?php echo $row['description']; ?> </td>
				<td><?php echo $row['pid']; ?> </td>
				<td><?php echo $row['date']; ?> </td>
				
				<td>
	
					<a class="btn btn-danger btn-sm" href="delete.php?bid=<?php echo $row['bid']; ?>" onclick="return confirm('Are you sure?')"> Delete </a>
				</td>
			</tr>

			<?php } ?>


		 </table>      
</div>


