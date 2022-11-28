<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $data = $_GET['id'];
    $split = explode("/", $data);
    $order_id = $split[0];
    $product_id = $split[1];
    $quantity = $split[2];
    $invoice = $split[3];

    $query = "select * from product where p_id  = '$product_id'";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_array($result);
        $old_quantity = $row['p_quantity'];
        $new_quantity = $old_quantity - $quantity;


        $sql = "update pending_orders set order_status = 'accepted' where order_id = '$order_id' and invoice_number='$invoice'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            $sql2 = "update user_orders set order_status = 'accepted' where order_id = '$order_id' and invoice_number='$invoice'";
            $res2 = mysqli_query($conn, $sql2);
            if ($res2) {
                $sql3 = "update product set p_quantity = '$new_quantity' where p_id = '$product_id'";
                $res3 = mysqli_query($conn, $sql3);
                if ($res3) {
                    $sql4 = "delete from pending_orders where product_id = '$product_id' and invoice_number='$invoice'";
                    $res4 = mysqli_query($conn, $sql4);
                    if ($res4) {
                        echo "<script>alert('Order Confirmed')</script>";
                        echo '<script>window.open("view_orders.php","_self")</script>';
                    }
                }
            }
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
