<?php
include('../db/connect.php');
session_start();
$username = $_SESSION['admin_username'];


$sql = "delete from admin_info where admin_username = '$username'";
$res = mysqli_query($conn, $sql);

if ($res) {
    session_unset();
    session_destroy();
    echo "<script>window.open('index.php','_self')</script>";
} else {
    die(mysqli_error($conn));
}
