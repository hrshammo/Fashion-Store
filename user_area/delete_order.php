<?php
include('../db/connect.php');
session_start();


if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "delete from pending_orders where product_id = '$p_id'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        $sql = "delete from user_orders where product_id = '$p_id'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>alert('Order  Canceled')</script>";
            echo "<script>window.open('view_orders.php?type=pending','_self')</script>";
        }
    } else {
        die(mysqli_error($conn));
    }
}
