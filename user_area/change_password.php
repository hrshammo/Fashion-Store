<?php
include('../db/connect.php');
session_start();
$username = $_SESSION['username'];
if (isset($_POST['change_password'])) {
    $old_p = $_POST['old_password'];
    $new_p = $_POST['new_password'];
    $con_p = $_POST['confirm_password'];

    if ($new_p === $con_p) {
        $con_p = password_hash($new_p, PASSWORD_BCRYPT);
    }

    $sql = "select * from user_info where  username='$username'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    $pass = $row['user_password'];

    $check_pass = password_verify($old_p, $pass);

    if ($check_pass) {
        $sql = "update user_info set user_password='$con_p'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>alert('Password Updated')</script>";
            echo "<script>window.open('setting.php','_self')</script>";
        } else {
            die(mysqli_error($conn));
        }
    } else {
        echo "<script>alert('Wrong Password!')</script>";
        echo "<script>window.open('setting.php','_self')</script>";
    }
}
