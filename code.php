<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_users']))
{
    $users_id = mysqli_real_escape_string($con, $_POST['users_id']);

    $query = "DELETE FROM users WHERE id='$users_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Profile Deleted Successfully";
        header("Location: iindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: iindex.php");
        exit(0);
    }
}

if(isset($_POST['update_users']))
{
    $users_id = mysqli_real_escape_string($con, $_POST['users_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);

    $query = "UPDATE users  SET name='$name', address='$address', phone='$phone' WHERE id='$users_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Your Updated Successfully";
        header("Location: iindex.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Profile Not Updated";
        header("Location: iindex.php");
        exit(0);
    }

}


if(isset($_POST['save_users ']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
  

    $query = "INSERT INTO users  (name,address,phone) VALUES ('$name','$address','$phone')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>