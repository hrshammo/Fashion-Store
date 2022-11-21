<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['admin_username'];


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="profile_style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HRX | Admin | Products</title>

    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="side_bar">
        <div class="logo-details">
            <img src="../img/icon.png" alt="" style="width:100px;height:50px !important">
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="profile.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>

            </li>
            <li>
                <a href="" class="active">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-cart-alt'></i>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class="links_name">View Products</span>
                </a>

            </li>
            <li>
                <a href="view_orders.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i>
                    <span class="links_name">Pending Orders</span>
                </a>

            </li>

            <li>
                <a href="view_admins.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user-check' style='color:#ffffff'></i>
                    <span class="links_name">View Admins</span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class="fa-thin fa"></i>
                    <i class='bx bxs-key bx-rotate-180' style='color:#fcfafa'></i>
                    <span class="links_name">Change Password</span>
                </a>

            </li>
            <li>
                <a href="#" class="warning">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-trash bx-flashing' style='color:#ffffff'></i>
                    <span class="links_name">Delete Account</span>
                </a>

            </li>


            <li>
                <a href="#">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-cog bx-spin' style='color:#ffffff'></i>
                    <span class="links_name">Setting</span>
                </a>

            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name"><?php echo $username; ?></div>
                    </div>
                </div>
                <a href="logout.php"><i class='bx bx-log-out' id="log_out" style="left:100px !important"></i></a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Products</div>
        <div class="text-2">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    $query = "select * from product order by rand()";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($data = mysqli_fetch_array($result)) {
                            $p_id = $data['p_id'];
                            echo '<tr>
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $data["p_img1"] . '" alt="" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $data['p_name'] . '</td>
                            <td>' . $data['p_details'] . '</td>
                            <td>' . $data['p_keyword'] . '</td>
                            <td>' . CURRENCY . $data['p_price'] . '</td>
                            <td>' . $data['p_quantity'] . '</td>
                            <td>
                            <a href="edit_product.php?id=' . $p_id . '" style="margin-right: 20px !important"><i class="bx bxs-edit" style="color:#3a3a3a" ></i></a>
                            <a href="delete_product.php?id=' . $p_id . '" style="margin-left: 20px !important"><i class="bx bxs-trash" style="color:#3a3a3a" ></i></a>
                            </td>
                        </tr>';
                        }
                    }

                    ?>

                </tbody>
            </table>
            <div class="d-flex justify-content-center mb-2">
                <!-- <button type="button" class="btn btn-primary">Add Product</button> -->
                <!-- <a href=""><button type="button" class="btn btn-outline-primary ms-1"><i class='bx bxs-edit' style='color:#3a3a3a'></i> Edit</button></a> -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none !important">Add Product</button>
            </div>
        </div>


    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- <div class="modal-dialog"> -->
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-popup" id="myForm">
                        <!--  -->
                        <!--  -->

                        <form action="add_product.php" class="form-container" method="post">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Product Name" name="p_name" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Product Details" name="p_details" required>
                            </div>

                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Category</label>
                                <select class="form-select" id="inputGroupSelect01" name="p_ctag">
                                    <option selected>Choose...</option>
                                    <option value="Men" style="background-color: #333454; color: aliceblue;">Men</option>
                                    <option value="Woman" style="background-color:#59343e ;color: aliceblue;">Woman</option>
                                    <option value="Kid" style="background-color:#34594c ;color: aliceblue;">Kid</option>
                                    <option value="Beauty" style="background-color:#522f4b ;color: aliceblue;">Beauty</option>
                                    <option value="Accessories " style="background-color:#263024 ;color: aliceblue;">Accessories</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Sub Category</label>
                                <select class="form-select" id="inputGroupSelect01" name="p_sub_ctag">
                                    <option selected>Choose...</option>
                                    <option value="Topwear" style="background-color: #333454;color: aliceblue;">Topwear</option>
                                    <option value="Bottomwear" style="background-color: #333454;color: aliceblue">Bottomwear</option>
                                    <option value="Sports and Active wear">Sports and Active wear</option>
                                    <option value="Festive wear" style="background-color: #333454;color: aliceblue">Festive wear</option>
                                    <option value="Footwear">Footwear</option>
                                    <option value="Desi and Fusion wear" style="background-color:#59343e ;color: aliceblue;">Desi and Fusion wear</option>
                                    <option value="Western wear" style="background-color:#59343e ;color: aliceblue;">Western wear</option>
                                    <option value="Jewellery" style="background-color:#59343e ;color: aliceblue;">Jewellery</option>
                                    <option value="Boys Clothing" style="background-color:#34594c ;color: aliceblue;">Boys Clothing</option>
                                    <option value="Girls Clothing" style="background-color:#34594c ;color: aliceblue;">Girls Clothing</option>
                                    <option value="Boys Footwear" style="background-color:#34594c ;color: aliceblue;">Boys Footwear</option>
                                    <option value="Girls Foorwear" style="background-color:#34594c ;color: aliceblue;">Girls Foorwear</option>
                                    <option value="Infants" style="background-color:#34594c ;color: aliceblue;">Infants</option>
                                    <option value="Kid Accessories" style="background-color:#34594c ;color: aliceblue;">Kid Accessories</option>
                                    <option value="Makeup" style="background-color:#522f4b ;color: aliceblue;">Makeup</option>
                                    <option value="Skincare,Bath and Body" style="background-color:#522f4b ;color: aliceblue;">Skincare,Bath and Body</option>
                                    <option value="Haircare" style="background-color:#522f4b ;color: aliceblue;">Haircare</option>
                                    <option value="Fragrances" style="background-color:#522f4b ;color: aliceblue;">Fragrances</option>
                                    <option value="Mens Grooming" style="background-color:#522f4b ;color: aliceblue;">Mens Grooming</option>
                                    <option value="Beauty Gift" style="background-color:#522f4b ;color: aliceblue;">Beauty Gift</option>
                                    <option value="Watch" style="background-color:#263024 ;color: aliceblue;">Watch</option>
                                    <option value="Sunglasses" style="background-color:#263024 ;color: aliceblue;">Sunglasses</option>
                                    <option value="Belts" style="background-color:#263024 ;color: aliceblue;">Belts</option>
                                    <option value="Bath Accessories" style="background-color:#263024 ;color: aliceblue;">Bath Accessories</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01" name="p_colour">Color</label>
                                <select class="form-select" id="inputGroupSelect01">
                                    <option selected>Choose...</option>
                                    <option value="Blue">Blue</option>
                                    <option value="Red">Red</option>
                                    <option value="Black">Black</option>
                                    <option value="Maroon">Maroon</option>
                                    <option value="Yellow">Yellow</option>
                                    <option value="White">White</option>
                                    <option value="Green">Green</option>
                                </select>
                            </div>


                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Keywords" name="p_keyword" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Price" name="p_price" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Quantity" name="p_quantity" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="p_img1" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="p_img2" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="p_img3">
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="p_img4">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-warning" type="submit" name="update">Add Product</button>
                            </div>

                        </form>


                        <!--  -->
                        <!--  -->
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>

</body>

</html>