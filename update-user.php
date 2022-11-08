<?php
    session_start();
    require 'dbcon.php';
?>

    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <hr>
          <h1 class="text-center fw-bold text-uppercase">Update User</h1>
          <hr>
        </div>

        <?php include('message.php'); ?>

        <div class="border p-5">    
                <div class="d-flex align-items-center justify-content-end">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM usertable WHERE id='$id'";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $user = mysqli_fetch_array($query_run);
                            ?>
                            <form action="code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $user['id']; ?>">

                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?=$user['name'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <input type="text" name="phone" value="<?=$user['phone'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <input type="text" name="address" value="<?=$user['address'];?>" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update_user" class="btn btn-primary">
                                        Update User
                                    </button>
                                </div>

                            </form>
                            <?php
                        }
                        else
                        {
                            echo "<h4>No Such Id Found</h4>";
                        }
                    }
                    ?>
                </div>
        </div>
       
    </div>
    </div>
    
    <?php include 'includes/footer.php'; ?>