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
                <a href="#">
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
                    <i class='bx bx-chat'></i>
                    <span class="links_name">Messages</span>
                </a>

            </li>
            <li>
                <a href="#">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Analytics</span>
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
                    $query = "select * from product";
                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($data = mysqli_fetch_array($result)) {
                            echo '<tr>
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $data["p_img1"] . '" alt="" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $data['p_name'] . '</td>
                            <td>' . $data['p_details'] . '</td>
                            <td>' . $data['p_keyword'] . '</td>
                            <td>' . $data['p_price'] . '</td>
                            <td>' . $data['p_quantity'] . '</td>
                            <td>
                            <a href="" style="margin-right: 20px !important"><i class="bx bxs-edit" style="color:#3a3a3a" ></i></a>
                            <a href="" style="margin-left: 20px !important"><i class="bx bxs-trash" style="color:#3a3a3a" ></i></a>
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
                        <h6>Adding form</h6>
                    </div>
                </div>
                <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
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