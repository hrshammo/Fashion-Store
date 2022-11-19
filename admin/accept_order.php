<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "update pending_orders set order_status = 'accepted' where order_id = '$order_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $sql2 = "update user_orders set order_status = 'accepted' where order_id = '$order_id'";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2) {
            echo "<script>alert('Order Confirmed')</script>";
            echo '<script>window.open("view_orders.php","_self")</script>';
        }
    } else {
        die(mysqli_error($conn));
    }
}
