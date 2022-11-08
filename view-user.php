<?php
    require 'dbcon.php';
?>
    
    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row">
        
        <div class="col-md-12">
          <hr>
          <h1 class="text-center fw-bold text-uppercase">View User Details</h1>
          <hr>
        </div>

        <div class="border p-5">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
                <div class="card-body">

                    <?php
                    if(isset($_GET['id']))
                    {
                        $id = mysqli_real_escape_string($con, $_GET['id']);
                        $query = "SELECT * FROM usertable WHERE id='$id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $user = mysqli_fetch_array($query_run);
                            ?>
                            
                                <div class="mb-3">
                                    <label>Name</label>
                                    <p class="form-control">
                                        <?=$user['name'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?=$user['email'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <p class="form-control">
                                        <?=$user['phone'];?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Address</label>
                                    <p class="form-control">
                                        <?=$user['address'];?>
                                    </p>
                                </div>

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