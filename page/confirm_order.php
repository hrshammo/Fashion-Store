<?php
include('../db/connect.php');
include('../backend/common_function.php');
session_start();
$username  = $_SESSION['username'];
$ip = getIPAddress();
$sql_query = "select * from cart_details where ip_address='$ip'";
$result = mysqli_query($conn, $sql_query);
if (!$result) {
    die(mysqli_error($conn));
} else {
    $invoice_number = mt_rand();
    while ($first_row = mysqli_fetch_array($result)) {
        $p_id = $first_row['product_id'];
        $p_price = $first_row['price'];
        $quantity = $first_row['quantity'];

        $sql = "select * from user_info where username='$username'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($res);
        $u_id = $row['user_id'];
        if (isset($_GET['data'])) {
            $data = $_GET['data'];
            $split = explode("/", $data);
            $price = $split[0];
            $item = $split[1];

            $status = 'pending';

            $sql = "insert into user_orders (user_id,product_id,amount,invoice_number,order_date,order_status) values('$u_id','$p_id','$p_price','$invoice_number',NOW(),'$status')";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                // insert orders into pending orders table
                $sql2 = "insert into pending_orders (user_id,invoice_number,product_id,quantity,order_status) values('$u_id','$invoice_number','$p_id','$quantity','$status')";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    // delete items from cart
                    $sql4 = "delete from cart_details where ip_address='$ip' and  product_id='$p_id'";
                    $res4 = mysqli_query($conn, $sql4);
                    if (!$res4) {
                        die(mysqli_error($conn));
                    }
                } else {
                    die(mysqli_error($conn));
                }
            } else {
                die(mysqli_error($conn));
            }
        }
    }
    echo "<script>alert('Order is submitted')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}
