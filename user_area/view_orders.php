<?php
include('../db/connect.php');
include('../backend/common_function.php');
session_start();
if (isset($_GET['type'])) {
    $type = $_GET['type'];
}
$username = $_SESSION['username'];

$sql = "select * from user_info where username='$username'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
$u_id = $row['user_id'];

$orders = PendingOrders();
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HRX | View Orders</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">
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
                <a href="../index.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-home' style='color:#e5e4e4'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="profile.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>

            </li>
            <?php
            if ($type == 'accepted') {
                echo "<li>
                <a href='view_orders.php?type=accepted' class='active'>
                    <i class='fa-thin fa'></i>
                    <i class='bx bx-cart-alt'></i>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class='links_name'>My Orders</span>
                </a>
            </li>
            <li>
                <a href='view_orders.php?type=pending'>
                    <i class='fa-thin fa'></i>
            <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i>
                    <span class='links_name'>Pending Orders</span>
                </a>
            </li>";
            } elseif ($type == 'pending') {
                echo "<li>
                <a href='view_orders.php?type=accepted'>
                    <i class='fa-thin fa'></i>
                    <i class='bx bx-cart-alt'></i>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class='links_name'>My Orders</span>
                </a>
            </li>
            <li>
                <a href='view_orders.php?type=pending' class='active'>
                    <i class='fa-thin fa'></i>
                    <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i>
                    <span class='links_name'>Pending Orders</span>
                </a>
            </li>";
            }
            ?>




            <li>
                <a href="setting.php">
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
                <a href="user_logout.php"><i class='bx bx-log-out' id="log_out" style="left:100px !important"></i></a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Received Orders</div>
        <div class="text-2">
            <table class="table table-striped">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Invoice Number</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                        <th scope="col">Operation</th>
                        <!-- <?php
                                if (isset($_GET['type'])) {
                                    $type = $_GET['type'];

                                    if ($type == "pending") {
                                        echo '<th scope="col">Operation</th>';
                                    }
                                }
                                ?> -->

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $count = 1;
                    if (isset($_GET['type'])) {
                        $type = $_GET['type'];
                        $query;
                        if ($type == "accepted") {
                            $query = "select * from user_orders where user_id='$u_id' and order_status='$type' or order_status='canceled'";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($data = mysqli_fetch_array($result)) {
                                    $p_id = $data['product_id'];
                                    $invoice = $data['invoice_number'];
                                    $sql = "select * from product where p_id='$p_id'";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($res);

                                    $p_img = $row['p_img1'];

                                    echo '<tr>
                            <th scope="row">' . $count++ . '</th>
                            <td><img src="../page/Men/img/' . $p_img . '" alt="error" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                            <td>' . $data['invoice_number'] . '</td>
                            <td>' . $data['amount'] . '</td>
                            <td>' . $data['order_status'] . '</td>
                            <td>
                            <a href="remove_order.php?id=' . $p_id . "/" . $invoice . '" style="margin-left: 30px !important" ><i class="bx bx-trash fa-2x" style="color:#f80e0e" ></i></a>
                            </td>
                        </tr>';
                                }
                            }
                        } else if ($type == "pending") {
                            $query = "select * from user_orders where user_id='$u_id' and order_status='$type'";
                            $result = mysqli_query($conn, $query);
                            if ($result) {
                                while ($data = mysqli_fetch_array($result)) {
                                    $p_id = $data['product_id'];
                                    $sql = "select * from product where p_id='$p_id'";
                                    $res = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_array($res);

                                    $p_img = $row['p_img1'];
                                    echo '<tr>
                                            <th scope="row">' . $count++ . '</th>
                                            <td><img src="../page/Men/img/' . $p_img . '" alt="error" style="width:100px; height:100px; object-fit:contain; !important"></img></td>
                                            <td>' . $data['invoice_number'] . '</td>
                                            <td>' . $data['amount'] . '</td>
                                            <td>' . $data['order_status'] . '</td>
                                            <td>
                                            <a href="delete_order.php?id=' . $p_id . '" style="margin-left: 30px !important">
                                            <i class="bx bx-x-circle fa-2x" style="color:#f80e0e" ></i></a>
                                            </td>
                                        </tr>';
                                }
                            }
                        }
                        // $result = mysqli_query($conn, $query);
                        // if ($result) {
                        //     while ($data = mysqli_fetch_array($result)) {
                        //         echo '<tr>
                        //     <th scope="row">' . $count++ . '</th>
                        //     <td>' . $data['invoice_number'] . '</td>
                        //     <td>' . $data['total_products'] . '</td>
                        //     <td>' . $data['amount'] . '</td>
                        //     <td>' . $data['order_status'] . '</td>
                        //     <td>
                        //     <a href="delete_order.php?id=' . $u_id . '" style="margin-left: 30px !important"><i class="bx bxs-trash" style="color:#3a3a3a" ></i></a>
                        //     </td>
                        // </tr>';
                        //     }
                        // }
                    }
                    ?>

                </tbody>
            </table>
        </div>


    </section>
</body>

</html>