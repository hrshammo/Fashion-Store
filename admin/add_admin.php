<?php
include('../db/connect.php');
session_start();

if (isset($_POST['update'])) {
    $name = $_POST['admin_name'];
    $username = $_POST['admin_username'];
    $email = $_POST['admin_email'];
    $mobile = $_POST['admin_phone'];
    $admin_password = $_POST['admin_password'];
    // $admin_img = $_POST['admin_img'];
    $admin_img = $_FILES['admin_img'];
    $img_name = $admin_img['name'];
    $tmp_loc = $admin_img['tmp_name'];
    $location = "img/" . $img_name;

    $type = "temp";
    if ($img_name == NULL) {
        $img_name = "NULL";
    }
    $sql = "insert into admin_info (admin_type,admin_name,admin_username,admin_email,admin_mobile,admin_password,admin_img) values('$type','$name', '$username', '$email', '$mobile', '$admin_password', '$img_name')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        move_uploaded_file($tmp_loc, $location);
        echo "<script>alert('Admin Added')</script>";
        echo "<script>window.open('view_admins.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
