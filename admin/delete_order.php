<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $data = $_GET['id'];
    $split = explode("/", $data);
    $order_id = $split[0];
    $invoice = $split[1];
    $sql = "update pending_orders set order_status = 'canceled' where order_id = '$order_id' and invoice_number='$invoice'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $sql2 = "update user_orders set order_status = 'canceled' where order_id = '$order_id' and invoice_number='$invoice'";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2) {
            $sql3 = "delete from pending_orders where order_id = '$order_id' and invoice_number='$invoice'";
            $res3 = mysqli_query($conn, $sql3);
            echo "<script>alert('Order Canceled')</script>";
            echo '<script>window.open("view_orders.php","_self")</script>';
        }
    } else {
        die(mysqli_error($conn));
    }
}
