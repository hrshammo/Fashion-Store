<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $order_id = $_GET['id'];
    $sql = "update pending_orders set order_status = 'canceled' where order_id = '$order_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $sql2 = "update user_orders set order_status = 'canceled' where order_id = '$order_id'";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2) {
            $sql3 = "delete from pending_orders where order_id = '$order_id'";
            $res3 = mysqli_query($conn, $sql3);
            echo "<script>alert('Order Canceled')</script>";
            echo '<script>window.open("view_orders.php","_self")</script>';
        }
    } else {
        die(mysqli_error($conn));
    }
}
