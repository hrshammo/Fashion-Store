<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['admin_username'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $admin_img = $_POST['img'];
    if ($admin_img == NULL) {
        $admin_img = "NULL";
    }
    $sql = "update admin_info set admin_name='$name', admin_email='$email', admin_mobile='$mobile', admin_img='$admin_img' where admin_username='$username'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Profile Updated')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
