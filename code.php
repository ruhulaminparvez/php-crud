<?php

session_start();
require 'dbcon.php';


if(isset($_POST['save_user']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $query = "INSERT INTO `usertable`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$phone','$address')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Added Successfully";
        header('Location: add-user.php');
        exit(0);
    } 
    else
    {
        $_SESSION['message'] = "Failed, User Not Added!";
        header('Location: add-user.php');
        exit(0);
    }
}

if(isset($_POST['delete_user']))
{
    $id = $_POST['delete_user'];

    $query = "DELETE FROM `usertable` WHERE `id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header('Location: index.php');
        exit(0);
    } 
    else
    {
        $_SESSION['message'] = "Failed, User Not Deleted!";
        header('Location: index.php');
        exit(0);
    }
}

if(isset($_POST['update_user']))
{
    $id = $_POST['student_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "UPDATE `usertable` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address' WHERE `id` = '$id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header('Location: index.php');
        exit(0);
    } 
    else
    {
        $_SESSION['message'] = "Failed, User Not Updated!";
        header('Location: index.php');
        exit(0);
    }
}

?>