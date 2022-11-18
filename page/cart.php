<?php
session_start();
include '../db/connect.php';
// include '../backend/common_function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="cart_style.css">



  <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="../js/js_own.js"></script>

  <title>HRX | Cart</title>
</head>

<body>

  <!-- Will Show when user don't login -->
  <?php
  if (isset($_SESSION['username'])) {
    include '../after_login.php';
  } else {
    include '../before_login.php';
  }
  ?>

  <?php
  $ip = getIPAddress();
  $sql = "select * from cart_details where ip_address = '$ip'";
  $res = mysqli_query($conn, $sql);
  $row_count = mysqli_num_rows($res);
  ?>
  <!-- Cart html using Boothstap5 -->
  <section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>
                      <h6 class="mb-0 text-muted"><?php echo $row_count; ?> items</h6>
                    </div>

                    <?php
                    if ($res) {
                      $total = 0;
                      $sub_total = 0;
                      while ($row = mysqli_fetch_array($res)) {
                        $p_id = $row['product_id'];
                        $p_quantity = $row['quantity'];
                        $sql2 = "select * from product where p_id='$p_id'";
                        $res2 = mysqli_query($conn, $sql2);
                        while ($row2 = mysqli_fetch_array($res2)) {
                          $p_image = $row2['p_img1'];
                          $p_name = $row2['p_name'];
                          $p_details = $row2['p_details'];
                          $p_price = $row2['p_price'];
                          $total = $total + ($p_price * $p_quantity);

                          echo '<hr class="my-4">

                          <div class="row mb-4 d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                              <img src="men/img/' . $p_image . '" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                              <h6 class="text-muted">' . $p_name . '</h6>
                              <h6 class="text-black mb-0">' . $p_details . '</h6>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                              <button class="btn btn-link px-2" onclick="this.parentNode.querySelector("input[type=number]").stepDown()">
                                <i class="fas fa-minus"></i>
                              </button>
      
                              <input id="form1" min="0" name="quantity" value="' . $p_quantity . '" type="number" class="form-control form-control-sm" />
      
                              <button class="btn btn-link px-2" onclick="this.parentNode.querySelector("input[type=number]").stepUp()">
                                <i class="fas fa-plus"></i>
                              </button>
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">৳ ' . $p_price . '</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                              <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                            </div>
                          </div>';
                        }
                      }
                    }
                    ?>
                    <div class="row mb-4 d-flex justify-content-between align-items-center display-none">
                            <div class="col-md-2 col-lg-2 col-xl-2 display-none">
                              <img src="men/img/' . $p_image . '" class="img-fluid rounded-3 display-none" alt="Cotton T-shirt">
                            </div>
                    </div>
                    <!-- <hr class="my-4">

                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img src="men/img/id2img1.jpg" class="img-fluid rounded-3" alt="Cotton T-shirt">
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-3">
                        <h6 class="text-muted">Shirt</h6>
                        <h6 class="text-black mb-0">Cotton T-shirt</h6>
                      </div>
                      <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                          <i class="fas fa-minus"></i>
                        </button>

                        <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control form-control-sm" />

                        <button class="btn btn-link px-2" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                          <i class="fas fa-plus"></i>
                        </button>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0">৳ 599</h6>
                      </div>
                      <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                        <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                      </div>
                    </div> -->



                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="../index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey total_cart">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items <?php echo $row_count; ?></h5>
                      <h5>৳ <?php echo $total; ?></h5>
                    </div>

                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">Standard-Delivery(2-3 Days)- ৳ 50</option>
                        <option value="2">Fast-Delivery(1 Day)- ৳ 100</option>
                        <option value="3">Ferr-Delivery(5-7 Days)- ৳ 00</option>
                        <option value="4">Collect From Check Point -৳ 00 </option>
                      </select>
                    </div>

                    <h5 class="text-uppercase mb-3">Give code</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Enter your code</label>
                      </div>
                    </div>

                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>৳ <?php echo $total; ?></h5>
                    </div>

                    <button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Checkout</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>