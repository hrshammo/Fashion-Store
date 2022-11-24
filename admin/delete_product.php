<?php
include('../db/connect.php');

if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "delete from product where p_id = '$p_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo  "<script>alert('Product deleted')</script>";
        echo "<script>window.open('products.php','_self')</script>";
    }
}
