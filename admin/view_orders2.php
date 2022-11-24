<?php
include('../db/connect.php');
include('../backend/common_function.php');
session_start();
$username = $_SESSION['admin_username'];

?>

<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="profile_style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HRX | Admin | View Order</title>
    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="side_bar">
        <div class="logo-details">
            <img src="../img/icon.png" alt="" style="width:100px;height:50px !important">
            <div class="logo_name">Profile</div>
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
                <a href="products.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-cart-alt'></i>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class="links_name">View Products</span>
                </a>

            </li>
            <li>
                <a href="" class="active">
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
                <a href="#">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-trash' style='color:#ffffff'></i>
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
        <div class="text">Pending Orders</div>
        <div class="text-2">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Email</th>
                        <th scope="col">Invoice Number</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Status</th>
                        <th colspan="2">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    $query = "select * from pending_orders where order_status = 'pending'";

                    $result = mysqli_query($conn, $query);
                    if ($result) {
                        while ($data = mysqli_fetch_array($result)) {
                            $order_id = $data['order_id'];
                            $user_id = $data['user_id'];
                            $product_id = $data['product_id'];
                            $split = explode(",", $product_id);
                            $index = count($split);
                            $invoice = $data['invoice_number'];
                            $quantity = $data['quantity'];
                            $status = $data['order_status'];
                            $user_sql = "select * from user_info where user_id = $user_id";
                            $user_res = mysqli_query($conn, $user_sql);
                            if ($user_res) {
                                while ($user_row = mysqli_fetch_array($user_res)) {
                                    $c_name = $user_row['name'];
                                    $c_email = $user_row['user_email'];

                                    $product_sql = "select * from product where p_id=$product_id";
                                    $product_res = mysqli_query($conn, $product_sql);
                                    if ($product_res) {
                                        while ($product_row = mysqli_fetch_array($product_res)) {
                                            $p_img = $product_row['p_img1'];
                                            $p_name = $product_row['p_name'];

                                            echo '<tr>
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $p_img . '" alt="" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $p_name . '</td>
                            <td>' . $c_name . '</td>
                            <td>' . $c_email . '</td>
                            <td>' . $invoice . '</td>
                            <td>' . $quantity . '</td>
                            <td>' . $status . '</td>
                            <td>
                            <a href="accept_order.php?id=' . $order_id . '" style="margin-right: 20px !important"><i class="bx bxs-message-rounded-edit" ></i></a>
                            <a href="delete_order.php?id=' . $order_id . '" style="margin-left: 20px !important"><i class="bx bxs-trash" style="color:#3a3a3a" ></i></a>
                            </td>
                        </tr>';
                                        }
                                    } else {
                                        die(mysqli_error($conn));
                                    }
                                }
                            } else {
                                die(mysqli_error($conn));
                            }
                        }
                    } else {
                        die(mysqli_error($conn));
                    }

                    ?>

                </tbody>
            </table>
        </div>


    </section>
</body>

</html>