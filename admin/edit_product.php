<?php
include('../db/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
    <script src="../js/js_own.js"></script>
    <link rel="stylesheet" href="style.css">

    <title>HRX | Admin | Add Products</title>
</head>

<body>
    <div class="manu_admin">
        <a href="#" class="active">Dashboard</a>
        <a href="#" >Add Products</a>
        <a href="#">Order</a>
        <a href="#">Profile</a>
    </div>
    <?php
    function Alert()
    {
        echo '<h3 class="product_added_function">Product Added</h3>';
    }
    ?>

    
<section class="vh-100 bg-image addproduct">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            
                                <h2 class="text-uppercase text-center mb-3">All Products</h2>
   
            <div>
                
            </div>


    </div>
    </section>
</body>

</html>

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
        Alert();
        // echo "<script>window.open('add_product.php')</script>";
    } else {
        die(mysqli_error($conn));
    }
} else if (isset($_POST['Reset'])) {
}
?>