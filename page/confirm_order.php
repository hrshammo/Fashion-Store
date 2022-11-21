<?php
include('../db/connect.php');
include('../backend/common_function.php');
session_start();
$username  = $_SESSION['username'];
$ip = getIPAddress();
$tmp = "tmp.";
$p_id = "";
$sql = "select * from cart_details where ip_address='$ip'";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die(mysqli_error($conn));
} else {
    while ($row = mysqli_fetch_array($res)) {
        $t_p_id = $row['product_id'];
        $t_quantity = $row['quantity'];
        $tmp .= $row['product_id'] . ",";
    }
}
$tmp = explode(".", $tmp);
$p_id = $tmp[1];
// echo $p_id;
$sql = "select * from user_info where username='$username'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$u_id = $row['user_id'];
if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $split = explode("/", $data);
    $price = $split[0];
    $item = $split[1];
    $invoice_number = mt_rand();
    $status = 'pending';

    $sql = "insert into user_orders (user_id,amount,invoice_number,total_products,order_date,order_status) values('$u_id','$price','$invoice_number','$item',NOW(),'$status')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        // insert orders into pending orders table
        $sql2 = "insert into pending_orders (user_id,invoice_number,product_id,quantity,order_status,user_ip) values('$u_id','$invoice_number','$p_id','$item','$status','$ip')";
        $res2 = mysqli_query($conn, $sql2);
        if ($res2) {


            // delete items from cart
            $sql4 = "delete from cart_details where ip_address='$ip'";
            $res4 = mysqli_query($conn, $sql4);
            if ($res4) {
                echo "<script>alert('Order is submitted')</script>";
                echo "<script>window.open('../index.php','_self')</script>";
            } else {
                die(mysqli_error($conn));
            }
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
}
