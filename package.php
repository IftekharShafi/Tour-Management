<?php 
include('includes/config.php');

$sql="SELECT count(id) as total FROM packages ";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);


$skip= 0;
$take= 2;
$page = 1; 

if(isset($_GET['page']))
{

	$page=$_GET['page'];
	$skip= ($page - 1) * $take;
}

$totalPage=$data['total'] / $take;

$sql="SELECT * FROM packages ORDER BY id DESC 
		LIMIT $skip, $take



	";

$result= mysqli_query($con, $sql);





include('includes/header1.php'); 

?>


<div class="main-content">
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-2"></div>
			<div class="col-md-8">

			<?php while( $row=mysqli_fetch_assoc( $result ) ) { ?>

				<div class="single-post">
					<h2> <?php echo $row['title']; ?></h2>
					<div class="row">
						<div class="col-md-3">
							<img src="admin/<?php echo $row['image']; ?>">
						</div>
						<div class="col-md-7">
							<?php echo substr( $row['description'], 0,100); ?>
						</div>
						<div class="col-md-7">
							Type: <?php echo  $row['type']; ?>
						</div>
						<div class="col-md-7">
							Price: <?php echo  $row['price']; ?>
						</div>
						
					</div>
					<a class="btn btn-success" href="login.php"> Book </a>

				</div>


			<?php } ?>

			<div style="margin-bottom: 15px;">
				Showing page <?php echo $page; ?> 
			</div>

			<div class="row clearfix">
				<div class="col-md-6">
					<?php if($page>1) { ?>
					<a class="btn btn-danger" href="<?php echo $url ?>package.php?page=<?php echo (int)$page - 1; ?>"> << Previous </a>
				<?php }?>
				</div>
				<div class="col-md-6">
					<div class="text-right">
						<?php if($totalPage > $page) : ?>
						<a class="btn btn-danger" href="<?php echo $url ?>package.php?page=<?php echo    (int)$page + 1; ?>"> Next >> </a>
					<?php endif ?>
					</div>
				</div>
			</div>


			</div>
		</div>
	</div>
</div>


<?php include('includes/footer.php'); ?>