<?php
include('../db/connect.php');
session_start();


if (isset($_GET['id'])) {
    $data = $_GET['id'];
    $split = explode("/", $data);
    $p_id = $split[0];
    $invoice = $split[1];


    $sql = "delete from user_orders where product_id = '$p_id' and invoice_number = '$invoice'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>alert('Order  Removed')</script>";
        echo "<script>window.open('view_orders.php?type=pending','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
