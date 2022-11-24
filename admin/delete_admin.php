<?php
include('../db/connect.php');
session_start();
$username = $_SESSION['admin_username'];

if (isset($_GET['id'])) {
    $admin_id = $_GET['id'];

    $query = "select * from admin_info where admin_id = '$admin_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_array($result);
        $u_name = $row['admin_username'];
        $sql = "delete from admin_info where admin_id = '$admin_id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            if ($u_name == $username) {
                echo "<script>window.open('index.php','_self')</script>";
            } else {
                echo  "<script>alert('Admin removed')</script>";
                echo "<script>window.open('view_admins.php','_self')</script>";
            }
        }
    }
}
