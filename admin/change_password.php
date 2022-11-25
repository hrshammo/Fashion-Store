<?php
include('../db/connect.php');
session_start();
$username = $_SESSION['admin_username'];
if (isset($_POST['change_password'])) {
    $old_p = $_POST['old_password'];
    $new_p = $_POST['new_password'];
    $con_p = $_POST['confirm_password'];

    if ($new_p === $con_p) {
        $sql = "select * from admin_info where  admin_username='$username'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
        $pass = $row['admin_password'];

        if ($pass == $old_p) {
            $sql = "update admin_info set admin_password='$new_p' where admin_username='$username'";
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
}
