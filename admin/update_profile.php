<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['admin_username'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    // $admin_img = $_POST['img'];
    $admin_img = $_FILES['img'];
    $img_name = $admin_img['name'];
    $tmp_loc = $admin_img['tmp_name'];
    $location = "img/" . $img_name;



    if ($img_name == NULL) {
        $img_name = "NULL";
    }
    $sql = "update admin_info set admin_name='$name', admin_email='$email', admin_mobile='$mobile', admin_img='$img_name' where admin_username='$username'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        move_uploaded_file($tmp_loc, $location);
        echo "<script>alert('Profile Updated')</script>";
        echo "<script>window.open('profile.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
