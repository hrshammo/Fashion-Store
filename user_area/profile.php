<?php
include('../db/connect.php');
session_start();

$username = $_SESSION['username'];

$sql = "select * from user_info where username='$username'";
$res = mysqli_query($conn, $sql);
if ($res) {
    while ($row = mysqli_fetch_array($res)) {
        $name = $row['name'];
        $email = $row['user_email'];
        $mobile = $row['user_mobile'];
        $address = $row['user_address'];
        $address2 = $row['user_address2'];
        $user_img = $row['user_img'];
    }
}

if ($address2 == "NULL") {
    $address2 = '--';
}
if ($user_img == "NULL") {
    $user_img = 'def-user.png';
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
    <title>HRX | Profile</title>
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
                <a href="../index.php">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-home' style='color:#e5e4e4'></i>
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="#" class="active">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-user'></i>
                    <span class="links_name">Profile</span>
                </a>

            </li>
            <li>
                <a href="view_orders.php?type=accepted">
                    <i class="fa-thin fa"></i>
                    <i class='bx bx-cart-alt'></i>
                    <!-- <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i> -->
                    <span class="links_name">My Orders</span>
                </a>

            </li>
            <li>
                <a href="view_orders.php?type=pending">
                    <i class="fa-thin fa"></i>
                    <i class='bx bxs-cart-download bx-tada' style='color:#fffcfc'></i>
                    <span class="links_name">Pending Orders</span>
                </a>

            </li>


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
        <div class="text">Profile</div>
        <div class="text-2">
            <section style="background-color: #eee;">
                <div class="container py-5">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mb-4">
                                <div class="card-body text-center">
                                    <img src="img/<?php echo $user_img; ?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                    <h5 class="my-3"><?php echo $name; ?></h5>
                                    <p class="text-muted mb-1"><?php echo $username; ?></p>
                                    <p class="text-muted mb-4"><?php echo $email; ?></p>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $name; ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Email</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $email; ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Mobile</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $mobile; ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Default Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $address; ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <p class="mb-0">Secondary Address</p>
                                        </div>
                                        <div class="col-sm-9">
                                            <p class="text-muted mb-0"><?php echo $address2; ?></p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="d-flex justify-content-center mb-2">
                                    <!-- <button type="button" class="btn btn-primary">Follow</button> -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none !important"><i class='bx bxs-edit' style='color:#ffffff'></i> Edit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>




        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <!-- <div class="modal-dialog"> -->
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-popup" id="myForm">
                        <form action="update_profile.php" class="form-container" method="post" enctype="multipart/form-data">

                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Full Name" name="name" value="<?php echo $name; ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Default Address" name="address" value="<?php echo $address; ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Secondary Address" name="address2" value="<?php echo $address2; ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="01xxxxxxxxx" name="mobile" value="<?php echo $mobile; ?>" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile02" name="img">
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button class="btn btn-warning" type="submit" name="update">Update</button>
                            </div>

                        </form>
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