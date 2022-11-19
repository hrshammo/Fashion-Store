<?php
include('../db/connect.php');
?>

<?php
if (isset($_POST['add_product'])) {
    $p_name = $_POST['p_name'];
    $p_details = $_POST['p_details'];
    $p_price = $_POST['p_price'];
    $p_quantity = $_POST['p_quantity'];
    $p_color = $_POST['p_color'];
    $p_ctag = $_POST['p_ctag'];
    $p_sub_ctag = $_POST['p_sub_ctag'];
    $p_keyword = $_POST['p_keyword'];
    $p_img = $_POST['p_img'];
    $p_img1 = $_POST['p_img1'];
    $p_img2 = $_POST['p_img2'];
    $p_img3 = $_POST['p_img3'];


    $sql = "insert into product (p_name,p_details,p_colour,p_ctag,p_sub_ctag,p_price,p_quantity,p_date,p_img1,p_img2,p_img3,p_img4,p_keyword) values('$p_name','$p_details','$p_color','$p_ctag','$p_sub_ctag','$p_price','$p_quantity',NOW(),'$p_img','$p_img1','$p_img2','$p_img3','$p_keyword')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>window.open('products.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
} else if (isset($_POST['Reset'])) {
}
?>