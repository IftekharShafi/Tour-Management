

<?php 

if(isset($_GET['id']))
{

    include('../includes/config.php');

    $id =$_GET['id'];
    $sql ="SELECT * FROM user WHERE id = '$id' ";
    $result= mysqli_query($con, $sql);
    $row= mysqli_fetch_assoc($result);

}

include('../includes/header.php'); 

?>


<a class="btn btn-success" href="index.php"> Back </a>
<br><br>


<div class="content">
    <h2>EDIT User</h2>

      	<form method="POST" action="update.php?id=<?php echo $row['id']; ?>">

            <div class="form-group">
              <label for="Name">User Name</label>
              <input type="text" class="form-control" id="name" value="<?php echo $row['name'];?>" placeholder="User Name" name="name">
            </div>

            <div class="form-group">
              <label for="Email">User Email</label>
              <input type="text" class="form-control" id="email" value="<?php echo $row['email'];?>" placeholder="Email" name="email">
            </div>

            <div class="form-group">
              <label for="Mobile">Mobile No</label>
              <input type="text" class="form-control" id="mobile" value="<?php echo $row['mobile'];?>" placeholder="Mobile No" name="mobile">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>

     
</div>

<?php include('../includes/footer.php'); ?>