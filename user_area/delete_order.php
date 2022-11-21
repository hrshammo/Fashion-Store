<?php
include('../db/connect.php');
session_start();


if (isset($_GET['id'])) {
    $u_id = $_GET['id'];
    $sql = "delete from pending_orders where user_id = '$u_id'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Order  Canceled')</script>";
        echo "<script>window.open('view_orders.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
