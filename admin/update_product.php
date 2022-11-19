<?php
include('../db/connect.php');

if (isset($_POST['Update'])) {
    $p_id = $_POST['id'];
    $p_name = $_POST['p_name'];
    $p_details = $_POST['p_details'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity'];
    $p_keyword = $_POST['p_keyword'];
    $p_img1 = $_POST['p_img'];
    $p_img2 = $_POST['p_img1'];
    $p_img3 = $_POST['p_img2'];
    $p_img4 = $_POST['p_img3'];

    $sql = "update product set p_name='$p_name',p_details='$p_details',p_price='$p_price',p_quantity='$p_quantity',p_date=NOW(),p_img1='$p_img1',p_img2='$p_img2',p_img3='$p_img3',p_img4='$p_img4',p_keyword='$p_keyword' where p_id='$p_id'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        echo  "<script>alert('Product updated')</script>";
        echo "<script>window.open('products.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
