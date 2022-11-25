<?php
include 'backend/common_function.php';
include 'db/connect.php';

if (isset($_GET['add_to_cart'])) {
    $data = $_GET['add_to_cart'];
    $split = explode("/", $data);
    $p_id = $split[0];
    $price = $split[1];
    $ip = getIpaddress();
    $quantity = 1;

    $check_sql = "select * from cart_details where product_id='$p_id' and ip_address='$ip'";
    $result = mysqli_query($conn, $check_sql);
    $count_row = mysqli_num_rows($result);
    if ($count_row == 0) {

        $sql = "insert into cart_details (product_id,price,ip_address,quantity) values('$p_id','$price','$ip','$quantity')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>alert('Item added to cart')</script>";
            // sleep(5);
            //header('Location: ' . $_SERVER['HTTP_REFERER']);
            echo "<script>window.open('index.php','_self')</script>";
            //         echo '<div class="alert alert-success" role="alert">
            //         <strong>Success..<br></strong> Item added to cart
            //  </div>';
        } else {
            die(mysqli_error($conn));
        }
    } else {
        echo "<script>alert('This item  is already present inside cart')</script>";
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
        echo "<script>window.open('index.php','_self')</script>";
        //       echo '<div class="alert alert-warning" role="alert">
        //    <strong>Success..<br></strong> This item  is already present inside cart
        //  </div>';
    }
}
