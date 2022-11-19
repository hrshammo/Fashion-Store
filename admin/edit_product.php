<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['admin_username'];

if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "select * from product where p_id = '$p_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        while ($row = mysqli_fetch_array($res)) {
            $p_name = $row['p_name'];
            $p_details = $row['p_details'];
            $p_price = $row['p_price'];
            $p_quantity = $row['p_quantity'];
            $p_keyword = $row['p_keyword'];
            $p_img1 = $row['p_img1'];
            $p_img2 = $row['p_img2'];
            $p_img3 = $row['p_img3'];
            $p_img4 = $row['p_img4'];
        }
    }
}
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
                    <span class="links_name">Products</span>
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
                <a href="#">
                    <i class="fa-thin fa"></i>
                    <i class='bx bxs-category bx-rotate-180' style='color:#fcfafa'></i>
                    <span class="links_name">Catagories</span>
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

            <section class="vh-100 bg-image addproduct">


                <!--  -->
                <form action="update_product.php" method="post">

                    <div class="form-outline mb-1">
                        <input type="text" id="name" placeholder="Product Name" name="p_name" class="form-control form-control-m" value="<?php echo $p_name ?>" />

                    </div>
                    <div class="form-outline mb-1">
                        <input type="text" id="details" placeholder="Product details" name="p_details" class="form-control form-control-m" value="<?php echo $p_details ?>" />
                    </div>


                    <div class="form-outline mb-1">
                        <input type="number" placeholder="price" id="price" name="p_price" class="form-control form-control-m" value="<?php echo $p_price ?>" />
                    </div>

                    <div class="form-outline mb-1">
                        <input type="number" placeholder="Products quantity" id="quantity" name="p_quantity" class="form-control form-control-m" value="<?php echo $p_quantity ?>" />



                    </div>
                    <div class="form-outline mb-1">
                        <input type="text" placeholder="Search keyword" id="" name="p_keyword" class="form-control form-control-m" value="<?php echo $p_keyword ?>" />

                    </div>
                    <div class="form-outline mb-1">
                        <div class="col-md-9 pe-5">

                            <input class="form-control form-control-m" id="formFileLg" type="file" name="p_img" required />
                        </div>
                    </div>

                    <div class="form-outline mb-1">
                        <div class="col-md-9 pe-5">

                            <input class="form-control form-control-m" id="formFileLg" type="file" name="p_img1" required />
                        </div>
                    </div>

                    <div class="form-outline mb-1">
                        <div class="col-md-9 pe-5">

                            <input class="form-control form-control-m" id="formFileLg" type="file" name="p_img2" required />
                        </div>
                    </div>

                    <div class="form-outline mb-1">
                        <div class="col-md-9 pe-5">

                            <input class="form-control form-control-m" id="formFileLg" type="file" name="p_img3" required />
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $p_id; ?>">
                    <div class="d-flex justify-content-end pt-3">
                        <button type="submit" class="btn btn-light btn-lg" name="Reset">Reset All</button>
                        <button type="submit" class="btn btn-warning btn-lg ms-2" name="Update">Update</button>
                    </div>
                </form>
                <!--  -->



            </section>

    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- data-bs-toggle="modal" data-bs-target="#exampleModal" -->
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>

</html>