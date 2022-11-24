<?php
include('../db/connect.php');
include('../backend/common_function.php');

if (isset($_GET['value'])) {
    $ip = getIPAddress();
    $full_data = $_GET['value'];
    $split = explode("/", $full_data);
    $operation = $split[0];
    $id = $split[1];

    $sql = "select * from cart_details where ip_address='$ip' and product_id='$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_array($res);
        $quantity = $row['quantity'];

        if ($operation == "plus") {
            $quantity = $quantity + 1;
        } else if ($operation == "minus" && $quantity >= 2) {
            $quantity = $quantity - 1;
        }

        $query = "update cart_details set quantity='$quantity' where ip_address='$ip' and product_id='$id'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>window.open('cart.php','_self')</script>";
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
