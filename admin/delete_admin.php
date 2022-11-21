<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $admin_id = $_GET['id'];
    $sql = "delete from admin_info where admin_id = '$admin_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo  "<script>alert('Admin removed')</script>";
        echo "<script>window.open('view_admins.php','_self')</script>";
    }
}
