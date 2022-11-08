<?php
  session_start();
  require 'dbcon.php';
?>

    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row">

        
        <div class="col-md-12">
          <hr>
          <h1 class="text-center fw-bold text-uppercase">User List</h1>
          <hr>
        </div>

        <div class="my-3 d-flex align-items-center justify-content-center">
            <a href="add-user.php" class="btn btn-primary">Add User</a>
        </div>  

        <?php include('message.php'); ?>

        <table class="table table-bordered table-striped table-hover text-center">
          <thead>
            <tr>
              <th scope="col">Serial</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              $query = "SELECT * FROM `usertable`";
              $query_run = mysqli_query($con, $query);
              $serial = 1;
              if(mysqli_num_rows($query_run) > 0)
              {
                while($row = mysqli_fetch_assoc($query_run))
                {
                  ?>
                  <tr>
                    <td><?php echo $serial++ ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td>
                        <a href="view-user.php?id=<?= $row['id']; ?>" class="btn btn-info text-white btn-sm">View</a>
                        <a href="update-user.php?id=<?= $row['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                        <form action="code.php" method="POST" class="d-inline">
                          <button type="submit" name="delete_user" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                        </form>                              
                    </td>
                  </tr>
                  <?php
                }
              }
              else
              {
                echo "No Record Found";
              }
            ?>
          </tbody>
      </table>
    </div>
  </div>

  <?php include 'includes/footer.php'; ?>
    