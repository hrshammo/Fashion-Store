<?php
include('../db/connect.php');

if (isset($_POST['Update'])) {
    $p_id = $_POST['id'];
    $p_name = $_POST['p_name'];
    $p_details = $_POST['p_details'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity'];
    $p_keyword = $_POST['p_keyword'];
    // $p_img1 = $_POST['p_img'];
    // $p_img2 = $_POST['p_img1'];
    // $p_img3 = $_POST['p_img2'];
    // $p_img4 = $_POST['p_img3'];

    $sql = "select * from product where p_id='$p_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_array($res);
        $old_img1 = $row['p_img1'];
        $old_img2 = $row['p_img2'];
        $old_img3 = $row['p_img3'];
        $old_img4 = $row['p_img4'];
    }
    $p_img = $_FILES['p_img'];
    $p_img1 = $_FILES['p_img1'];
    $p_img2 = $_FILES['p_img2'];
    $p_img3 = $_FILES['p_img3'];

    $img_name1 = $p_img['name'];
    if ($img_name1 == NULL) {
        $img_name1 = $old_img1;
    }
    $tmp_loc1 = $p_img['tmp_name'];
    $location1 = "../page/Men/img/" . $img_name1;

    $img_name2 = $p_img1['name'];
    if ($img_name2 == NULL) {
        $img_name2 = $old_img2;
    }
    $tmp_loc2 = $p_img1['tmp_name'];
    $location2 = "../page/Men/img/" . $img_name2;

    $img_name3 = $p_img2['name'];
    if ($img_name3 == NULL) {
        $img_name3 = $old_img3;
    }
    $tmp_loc3 = $p_img2['tmp_name'];
    $location3 = "../page/Men/img/" . $img_name3;

    $img_name4 = $p_img3['name'];
    if ($img_name4 == NULL) {
        $img_name4 = $old_img4;
    }
    $tmp_loc4 = $p_img3['tmp_name'];
    $location4 = "../page/Men/img/" . $img_name4;


    $sql = "update product set p_name='$p_name',p_details='$p_details',p_price='$p_price',p_quantity='$p_quantity',p_date=NOW(),p_img1='$img_name1',p_img2='$img_name2',p_img3='$img_name3',p_img4='$img_name4',p_keyword='$p_keyword' where p_id='$p_id'";
    $res = mysqli_query($conn, $sql);

    if ($res) {
        move_uploaded_file($tmp_loc1, $location1);
        move_uploaded_file($tmp_loc2, $location2);
        move_uploaded_file($tmp_loc3, $location3);
        move_uploaded_file($tmp_loc4, $location4);
        echo  "<script>alert('Product updated')</script>";
        echo "<script>window.open('products.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
