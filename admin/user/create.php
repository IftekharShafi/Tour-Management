
<?php include('../includes/header.php'); ?>

<a class="btn btn-success" href="index.php"> Back </a>
<br><br>

<div class="content">
    <h2>ADD New User</h2>

    	<form method="POST" action="store.php">

          <div class="form-group">
            <label for="User Name">User Name</label>
            <input type="text" class="form-control" id="name"  placeholder="User Name" name="name">
          </div>

          <div class="form-group">
            <label for="Email">Email</label>
            <input type="text" class="form-control" id="email"  placeholder="Email" name="email">
          </div>

          <div class="form-group">
            <label for="Mobile">Mobile</label>
            <input type="text" class="form-control" id="mobile"  placeholder="Mobile No" name="mobile">
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>   
</div>


<?php include('../includes/footer.php'); ?>