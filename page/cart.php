<?php
session_start();
include '../db/connect.php';
include '../backend/common_function.php';
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


  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="../js/js_own.js"></script>


  <title>HRX | Cart</title>
</head>

<body>

  <header>
    <div class="logo"><a href="index.php"><img src="img/icon.png" alt="" srcset=""></a></div>
    <div>
      <div class="uper">
        <form action="" method="get">
          <div class="dropdown">
            <button class="dropbtn">Men</button>
            <div class="dropdown-content">
              <a href="Men/topware.php?ctg=Men/Sports and Active wear" name="ctg">Sports and Active wear</a>
              <a href="Men/topware.php?ctg=Men/Topwear" name="ctg">Topwear</a>
              <a href="Men/topware.php?ctg=Men/Bottomwear" name="ctg">Bottomwear</a>
              <a href="Men/topware.php?ctg=Men/Festive wear" name="ctg">Festive wear</a>

              <a href="Men/topware.php?ctg=Men/Footwear" name="ctg">Footwear</a>
              <a href="Men/topware.php?ctg=Men/Accessories" name="ctg">Accessories</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Woman</button>
            <div class="dropdown-content">
              <a href="Men/topware.php?ctg=Woman/Desi and Fusion wear">Desi and Fusion wear</a>
              <a href="Men/topware.php?ctg=Woman/Western wear">Western wear</a>
              <a href="Men/topware.php?ctg=Woman/Jewellery">Jewellery</a>
              <a href="Men/topware.php?ctg=Woman/Sports and Active wear">Sports and Active wear</a>
              <a href="Men/topware.php?ctg=Woman/Footwear">Footwear</a>
              <a href="Men/topware.php?ctg=Woman/Accessories">Accessories</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Kid</button>
            <div class="dropdown-content">
              <a href="Men/topware.php?ctg=Kid/Boys Clothing">Boys Clothing</a>
              <a href="Men/topware.php?ctg=Kid/Girls Clothing">Girls Clothing</a>
              <a href="Men/topware.php?ctg=Kid/Boys Footwear">Boys Footwear</a>
              <a href="Men/topware.php?ctg=Kid/Girls Foorwear">Girls Foorwear</a>
              <a href="Men/topware.php?ctg=Kid/Infants">Infants</a>
              <a href="Men/topware.php?ctg=Kid/Kid Accessories">Kid Accessories</a>

            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Beauty</button>
            <div class="dropdown-content">
              <a href="Men/topware.php?ctg=Beauty/Makeup">Makeup</a>
              <a href="Men/topware.php?ctg=Beauty/Skincare,Bath and Body">Skincare,Bath and Body</a>
              <a href="Men/topware.php?ctg=Beauty/Haircare">Haircare</a>
              <a href="Men/topware.php?ctg=Beauty/Fragrances">Fragrances</a>
              <a href="Men/topware.php?ctg=Beauty/Men Grooming">Men Grooming</a>
              <a href="Men/topware.php?ctg=Beauty/Beauty Gift">Beauty Gift</a>

            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Accessories</button>
            <div class="dropdown-content">
              <a href="Men/topware.php?ctg=Accessories/Watch">Watch</a>
              <a href="Men/topware.php?ctg=Accessories/Sunglasses">Sunglasses</a>
              <a href="Men/topware.php?ctg=Accessories/Belts">Belts</a>
              <a href="Men/topware.php?ctg=Accessories/Bath Accessories">Bath Accessories</a>
              <a href="Men/topware.php?ctg=Accessories/Others">Others</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <form action="Men/search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

    <div class="dropdown2">
      <?php
      if (isset($_SESSION['username'])) {
        echo '<a href="../user_area/profile.php" style="top:-20px; color: white; !important">
        <img src="img/profile.png" alt="" srcset=""  style="width:20px; !important">
        <p>Profile</p>
      </a>';
      } else {
        echo '<button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>';
      }
      ?>
      <!-- <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button> -->

      <div class="dropdown-content2" style="display:none" id="LoginForm">

        <form action="../backend/user_login.php" method="post">
          <div class="form-outline mb-4">
            <input type="username" id="form2Example1" class="form-control" name="username" placeholder="username" />
            <!-- <label class="form-label" for="form2Example1">Email address</label> -->
          </div>


          <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password" placeholder="password" />
            <!-- <label class="form-label" for="form2Example2">Password</label> -->
          </div>


          <div class="row mb-4">
            <div class="col d-flex justify-content-center">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                <label class="form-check-label" for="form2Example31"> Remember me </label>
              </div>
            </div>

            <div class="col">

              <a href="forgot_password.php">Forgot password?</a>
            </div>
          </div>


          <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>


          <div class="text-center">
            <p>Not a member? <a href="reg.php">Register</a></p>
            <p>or sign up with:</p>
            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-google"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-link btn-floating mx-1">
              <i class="fab fa-github"></i>
            </button>
          </div>
        </form>

      </div>
    </div>



    </div>

  </header>

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
                    if ($row_count > 0) {
                      if ($res) {
                        $tax = 0;
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
                              
                            <a href="update_quantity.php?value=minus/' . $p_id . '"><button type="submit"  name="minus" style="border:none;background:none;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAGRJREFUSEvtlcEJACAMA+NmOrmOJj4EkSKIxiLEAXLt2dIApxecuBD4mXmplmqaAQ0XTe0cvFIdL1VRrJwVOAM4hTdo+gZ82m1vdFv1pS+2Y7THVL1juFRLNc2AhoumduceU4uoQOwGHzOfXXEAAAAASUVORK5CYII="/></button></a>

                              <input id="quantity" min="0" name="quantity" value="' . $p_quantity . '" type="number" class="form-control form-control-sm" />

                              <a href="update_quantity.php?value=plus/' . $p_id . '"><button type="submit" name="plus" style="border:none;background:none;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAKBJREFUSEvtlusNQDAURo8JGMUG2IhJ2AgbGIUN5CaVSKRVFa+4/fs1/dpzX414aEUP+aLGt5H/HOoUqA2eChiOogp9cQ60xqwAOjXeI6Co9wgt+qXJJSUTW24iWmO00lFOk01zxVhKJPNFYNnXA0Jns15pLDgTB2qfzjWGoHZRvjS51HhNQFHfNhZ9O5c1QUOn08mGhn5vTxP0PuB/MZ4BelwoHy7lH1oAAAAASUVORK5CYII="/></button></a>
                              
                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                              <h6 class="mb-0">৳ ' . $p_price . '</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                            <a href="remove_from_cart.php?p_id=' . $p_id . '"><img src="img/delete.png" alt="delete" style="width:22px;height:auto"></a>
                            </div>
                          </div>';
                          }
                        }
                      } else {
                        die(mysqli_error($conn));
                      }
                    } else {
                      echo '<div class="alert alert-warning" role="alert">
                      <h3>Oops! Your Cart is empty add some product to your cart   </h3>
                    </div>';
                    }
                    ?>




                    <hr class="my-4">

                    <div class="pt-5">
                      <h6 class="mb-0"><a href="../index.php" class="text-body"><i class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                    <hr class="my-4">

                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">items <?php echo $row_count; ?></h5>
                      <?php
                      if ($row_count > 0) {
                        echo '<h5>৳  ' . $total . ' </h5>';
                      }
                      ?>

                    </div>

                    <h5 class="text-uppercase mb-3">Shipping</h5>

                    <div class="mb-4 pb-2">
                      <form action="" method="post">
                        <select class="select" name="tax" style="margin-bottom: 5px !important">
                          <option>Choose a delivery method</option>
                          <option value="50">Standard-Delivery(2-3 Days)- ৳ 50</option>
                          <option value="100">Fast-Delivery(1 Day)- ৳ 100</option>
                          <option value="0">Ferr-Delivery(5-7 Days)- ৳ 00</option>
                          <option value="0">Collect From Check Point -৳ 00 </option>
                        </select>
                        <button type="submit" class="btn btn-outline-secondary" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" name="payment_submit">
                          Confirm Delivery Method
                        </button>
                      </form>
                    </div>

                    <h5 class="text-uppercase mb-3">Give code</h5>

                    <div class="mb-5">
                      <div class="form-outline">
                        <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Examplea2">Enter your code</label>
                      </div>
                    </div>

                    <hr class="my-4">

                    <?php
                    if (isset($_POST['payment_submit'])) {
                      $tax = $_POST['tax'];
                    }
                    ?>
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <?php
                      if ($row_count > 0) {
                        echo '<h5>৳  ' . $total + $tax . ' </h5>';
                      } else {
                        echo '<h5>৳  0 </h5>';
                      }
                      ?>

                    </div>

                    <?php
                    if (isset($_SESSION['username'])) {
                      if ($row_count > 0) {
                        echo '<button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Checkout</button>';
                      }
                      // echo '<a href="checkout.php"><button type="button" class="btn btn-dark btn-block btn-lg" data-mdb-ripple-color="dark">Checkout</button></a>';
                    } else {
                      echo '<label class="form-label" for="form3Examplea2">Please, login first to checkout</label>';
                    }
                    ?>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <!-- <div class="modal-dialog"> -->
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Choose Payment Method</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="form-popup" id="myForm">
            <div class="col-xl-12 bg-grey">
              <div class="p-5">
                <h3 class="fw-bold mb-5 mt-2 pt-1">Order</h3>
                <hr class="my-4">



                <h5 class="text-uppercase mb-3">Select Payment Method</h5>

                <!-- if bkash or bitcoin Select h3 will show -->
                <h3 style="color: #d42c2c; display:none;" id="message">Currently Not available</h3>
                <!-- <form action="" method="post"> -->
                <label class="radio_img">
                  <input type="radio" name="test" value="small" checked onclick="ErrorSolve()">
                  <!-- <button class="p_btn" type="submit"><img class="payment_m" src="../img/cod.png" alt="Cash on delivery"></button> -->
                  <img class="payment_m" src="../img/cod.png" alt="Cash on delivery">
                </label>

                <label>
                  <input type="radio" name="test" value="big" onclick="ErrorMessage()">
                  <img class="payment_m" src="../img/bkash.png" alt="Bkash">
                </label>
                <label>
                  <input type="radio" name="test" value="big" onclick="ErrorMessage()">
                  <img class=" payment_m" src="../img/nagad.png" alt="Nagad">
                </label>
                <!-- </form> -->
                <br>
                <br>
                <br>
                <a href="confirm_order.php?data=<?php echo $total . "/" . $row_count ?>" id="con_btn"><button class="btn btn-primary disabled" role="button" aria-disabled="true">Confirm Order</button></a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function ErrorMessage() {
      var x = document.getElementById("con_btn");
      var y = document.getElementById("message");

      y.style.display = "block";
      x.style.display = "none";
      // if (x.style.display === "none") {
      //   x.style.display = "block";
      // } else {
      //   x.style.display = "none";
      // }
    }

    function ErrorSolve() {
      var x = document.getElementById("con_btn");
      var y = document.getElementById("message");
      y.style.display = "none";
      x.style.display = "block";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


  <script>
    const myModal = document.getElementById('myModal')
    const myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', () => {
      myInput.focus()
    })
  </script>

  <script>
    function loginpage() {
      var x = document.getElementById("LoginForm");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</body>



</html>