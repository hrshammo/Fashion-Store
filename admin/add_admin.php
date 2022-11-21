<?php
include('../db/connect.php');
session_start();

if (isset($_POST['update'])) {
    $name = $_POST['admin_name'];
    $username = $_POST['admin_username'];
    $email = $_POST['admin_email'];
    $mobile = $_POST['admin_phone'];
    $admin_img = $_POST['admin_img'];
    $admin_password = $_POST['admin_password'];

    if ($admin_img == NULL) {
        $admin_img = "NULL";
    }
    $sql = "insert into admin_info (admin_name,admin_username,admin_email,admin_mobile,admin_password,admin_img) values('$name', '$username', '$email', '$mobile', '$admin_password', '$admin_img')";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Admin Added')</script>";
        echo "<script>window.open('view_admins.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
