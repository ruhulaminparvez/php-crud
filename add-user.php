<?php
    session_start();
    require 'dbcon.php';
?>

    <?php include 'includes/header.php'; ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <hr>
          <h1 class="text-center fw-bold text-uppercase">Add User</h1>
          <hr>
        </div>

        <?php include('message.php'); ?>

        <div class="border p-5">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
                <form  action="code.php" method="POST">
                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                    <input type="text" class="form-control mb-2" name="name" id="exampleFormControlInput1" placeholder="Username" required>
                    <label for="exampleFormControlInput2" class="form-label">Email address</label>
                    <input type="email" class="form-control mb-2" name="email" id="exampleFormControlInput2" placeholder="name@example.com" required>
                    <label for="exampleFormControlInput3" class="form-label">Phone</label>
                    <input type="phone" class="form-control mb-2" name="phone" id="exampleFormControlInput3" placeholder="Phone" required>
                    <label for="exampleFormControlInput4" class="form-label">Address</label>
                    <input type="text" class="form-control mb-2" name="address" id="exampleFormControlInput4" placeholder="Address" required>
                    <button type="submit" name="save_user" class="btn btn-primary mt-2">Submit</button>
                </form>
        </div>
       
    </div>
  </div>
  
  <?php include 'includes/footer.php'; ?>