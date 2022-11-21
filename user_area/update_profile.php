<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['username'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $address2 = $_POST['address2'];
    $user_img = $_POST['img'];
    if ($user_img == NULL) {
        $user_img = "NULL";
    }
    $sql = "update user_info set name='$name', user_email='$email', user_address='$address', user_address2='$address2', user_mobile='$mobile', user_img='$user_img' where username='$username'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Profile Updated')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
