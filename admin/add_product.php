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
        <a href="#">Dashboard</a>
        <a href="#" class="active">Add Products</a>
        <a href="#">Order</a>
        <a href="#">Profile</a>
    </div>
    <?php
    function Alert()
    {
        echo '<h3 class="product_added_function">Product Added</h3>';
    }
    ?>


    <section class="vh-100 bg-image addproduct" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Add Products</h2>

                                <!--  -->
                                <form action="" method="post">

                                    <div class="form-outline mb-3">
                                        <input type="text" id="name" placeholder="Product Name" name="p_name" class="form-control form-control-lg" required />

                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="text" id="details" placeholder="Product details" name="p_details" class="form-control form-control-lg" required />
                                    </div>


                                    <div class="form-outline mb-3">
                                        <input type="number" placeholder="price" id="price" name="p_price" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="form-outline mb-3">
                                        <input type="number" placeholder="Products quantity" id="quantity" name="p_quantity" class="form-control form-control-lg" required />

                                        <div class="col-md-6 mb-4 form-outline ">
                                            <select class="select" name="p_color" required>
                                                <option value="Colour">Colour</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Red">Red</option>
                                                <option value="Black">Black</option>
                                                <option value="Maroon">Maroon</option>
                                                <option value="Yellow">Yellow</option>
                                                <option value="White">White</option>
                                                <option value="Green">Green</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-4 form-outline ">
                                            <select class="select" name="p_ctag" required>
                                                <option value="C_Tag">C_Tag</option>
                                                <option value="Men">Men</option>
                                                <option value="Woman">Woman</option>
                                                <option value="Kid">Kid</option>
                                                <option value="Beauty">Beauty</option>
                                                <option value="Accessories">Accessories</option>
                                            </select>
                                        </div>



                                        <div class="col-md-6 mb-4 form-outline ">
                                            <select class="select" name="p_sub_ctag" required>
                                                <option value="Topwear">Topwear</option>
                                                <option value="Bottomwear">Bottomwear</option>
                                                <option value="Sports and Active wear">Sports and Active wear</option>
                                                <option value="Festive wear">Festive wear</option>
                                                <option value="Footwear">Footwear</option>

                                            </select>
                                        </div>





                                    </div>
                                    <div class="form-outline mb-3">
                                        <input type="text" placeholder="Search keyword" id="" name="p_keyword" class="form-control form-control-lg" required />

                                    </div>
                                    <div class="form-outline mb-3">
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="p_img" required />
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="p_img1" required />
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="p_img2" required />
                                        </div>
                                    </div>

                                    <div class="form-outline mb-3">
                                        <div class="col-md-9 pe-5">

                                            <input class="form-control form-control-lg" id="formFileLg" type="file" name="p_img3" required />
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end pt-3">
                                        <button type="submit" class="btn btn-light btn-lg" name="Reset">Reset All</button>
                                        <button type="submit" class="btn btn-warning btn-lg ms-2" name="add_product">Add Product</button>
                                    </div>
                                </form>
                                <!--  -->

                            </div>
                        </div>
                    </div>
                </div>
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