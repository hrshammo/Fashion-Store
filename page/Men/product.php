<?php
session_start();
include('../../db/connect.php');
include '../../backend/common_function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../../style.css">

  <link rel="shortcut icon" href="../../img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="../../js/js_own.js"></script>

  <title>HRX | Products</title>
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
              <a href="topware.php?ctg=Men/Sports and Active wear" name="ctg">Sports and Active wear</a>
              <a href="topware.php?ctg=Men/Topwear" name="ctg">Topwear</a>
              <a href="topware.php?ctg=Men/Bottomwear" name="ctg">Bottomwear</a>
              <a href="topware.php?ctg=Men/Festive wear" name="ctg">Festive wear</a>

              <a href="topware.php?ctg=Men/Footwear" name="ctg">Footwear</a>
              <a href="topware.php?ctg=Men/Accessories" name="ctg">Accessories</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Woman</button>
            <div class="dropdown-content">
              <a href="topware.php?ctg=Woman/Desi and Fusion wear">Desi and Fusion wear</a>
              <a href="topware.php?ctg=Woman/Western wear">Western wear</a>
              <a href="topware.php?ctg=Woman/Jewellery">Jewellery</a>
              <a href="topware.php?ctg=Woman/Sports and Active wear">Sports and Active wear</a>
              <a href="topware.php?ctg=Woman/Footwear">Footwear</a>
              <a href="topware.php?ctg=Woman/Accessories">Accessories</a>
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Kid</button>
            <div class="dropdown-content">
              <a href="topware.php?ctg=Kid/Boys Clothing">Boys Clothing</a>
              <a href="topware.php?ctg=Kid/Girls Clothing">Girls Clothing</a>
              <a href="topware.php?ctg=Kid/Boys Footwear">Boys Footwear</a>
              <a href="topware.php?ctg=Kid/Girls Foorwear">Girls Foorwear</a>
              <a href="topware.php?ctg=Kid/Infants">Infants</a>
              <a href="topware.php?ctg=Kid/Kid Accessories">Kid Accessories</a>

            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Beauty</button>
            <div class="dropdown-content">
              <a href="topware.php?ctg=Beauty/Makeup">Makeup</a>
              <a href="topware.php?ctg=Beauty/Skincare,Bath and Body">Skincare,Bath and Body</a>
              <a href="topware.php?ctg=Beauty/Haircare">Haircare</a>
              <a href="topware.php?ctg=Beauty/Fragrances">Fragrances</a>
              <a href="topware.php?ctg=Beauty/Men's Grooming">Men's Grooming</a>
              <a href="topware.php?ctg=Beauty/Beauty Gift">Beauty Gift</a>

            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Accessories</button>
            <div class="dropdown-content">
              <a href="topware.php?ctg=Accessories/Watch">Watch</a>
              <a href="topware.php?ctg=Accessories/Sunglasses">Sunglasses</a>
              <a href="topware.php?ctg=Accessories/Belts">Belts</a>
              <a href="topware.php?ctg=Accessories/Bath Accessories">Bath Accessories</a>
              <a href="topware.php?ctg=Accessories/Others">Others</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    <form action="search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

    <div class="dropdown2">
      <?php
      if (isset($_SESSION['username'])) {
        echo '<a href="../../backend/user_logout.php" style="top:-20px; color: white; !important">
        <img src="img/profile.png" alt="" srcset=""  style="width:20px; !important">
        <p>Profile</p>
      </a>';
      } else {
        echo '<button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>';
      }
      ?>
      <!-- <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button> -->

      <div class="dropdown-content2" style="display:none" id="LoginForm">

        <form action="../../backend/user_login.php" method="post">
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

              <a href="../forgot_password.php">Forgot password?</a>
            </div>
          </div>


          <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>


          <div class="text-center">
            <p>Not a member? <a href="../reg.php">Register</a></p>
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
    <div class="uper  side2">

      <div class="dropdown headerimg">
        <a href="../cart.php">
          <img src="img/cart.png" alt="" srcset=""><sup><?php $cart = ItemInCart();
                                                        echo $cart; ?></sup>
          <p>Cart</p>
        </a>
      </div>
    </div>
  </header>
  <div>
    <h3 class="link_w"> <a href="../../index.php">Home /</a> <a href="../men.php">Men /</a>
      <a href="topware.php"> Topwear / </a> More by HRX
    </h3>

  </div>

  <!-- Fetch product details from database -->
  <?php
  // include('../../db/connect.php');

  if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql = "select * from product where p_id='$p_id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
      $row = mysqli_fetch_array($res);
      $p_name = $row['p_name'];
      $p_details = $row['p_details'];
      $p_price = $row['p_price'];
      $p_img1 = $row['p_img1'];
      $p_img2 = $row['p_img2'];
      $p_img3 = $row['p_img3'];
      $p_img4 = $row['p_img4'];
    } else {
      die(mysqli_error($conn));
    }
    // while ($row = mysqli_fetch_array($res)) {
    //   $p_name = $row['p_name'];
    //   $p_details = $row['p_details'];
    //   $p_price = $row['p_price'];
    //   $p_img1 = $row['p_img1'];
    //   $p_img2 = $row['p_img2'];
    //   $p_img3 = $row['p_img3'];
    //   $p_img4 = $row['p_img4'];
    // }
  }

  ?>


  <!-- product details-->
  <div class="image ">
    <img class="none" src="img/<?php echo $p_img1; ?>" data-thumb="" alt="" />
    <img class="none" src="img/<?php echo $p_img2; ?>" data-thumb="demo/images/up.jpg" alt="" title="" />
    <img src="img/<?php echo $p_img3; ?>" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" />
    <img src="img/<?php echo $p_img4; ?>" data-thumb="demo/images/nemo.jpg" alt="" title="" />
  </div>







  <div class="details">
    <h1><?php echo $p_name; ?></h1>
    <h2 class="detailsx"><?php echo $p_details; ?></h2>
    <button class="rateing"> <b>4.5*</b> <i>| 1.1k Ratings</i> </button>

    <h2 class="detailsy"><?php echo CURRENCY . ". " . $p_price; ?> <del><?php echo CURRENCY; ?>. 1299</del>
      <div class="orange">(58% OFF)</div>
    </h2>
    <h3>SELECT SIZE <a href="#">SIZE CHART ></a></h3>



    <div class="radio-toolbar">
      <input type="radio" id="radio38" name="radioFruit" value="38">
      <label class="mlxl" for="radio38">38</label>

      <input type="radio" id="radio40" name="radioFruit" value="40">
      <label for="radio40">40</label>

      <input type="radio" id="radio42" name="radioFruit" value="42">
      <label for="radio42">42</label>
      <input type="radio" id="radio44" name="radioFruit" value="44">
      <label for="radio44">44</label>
      <input type="radio" id="radio46" name="radioFruit" value="46">
      <label for="radio46">46</label>
    </div>
    <p>&nbsp;</p>

    <a href="../../add_to_cart.php?add_to_cart=<?php echo $p_id; ?>"><button class="addbagb">ADD TO CART</button></a>
    <!-- <button class="wishlistb">WISHLIST</button> -->

    <div class="delivery">
      <h2>DELIVERY OPTIONS</h2>
      <input class="pin" type="search" name="" id="" placeholder="    Enter a pin code">
      <button type="submit">
        Check
      </button>
      <p class="fristp">Please enter PIN code to check delivery time & Pay on Delivery Availability</p>
      <ul>
        <li>100% Original Products </li>
        <li>Pay on delivery might be available </li>
        <li>Easy 30 days returns and exchanges </li>
        <li> Try & Buy might be available</li>
      </ul>
    </div>
    <div class="offers">
      <h2>BEST OFFERS </h2>
      <h3>Best Price: <div class="orange"> <?php echo CURRENCY; ?>. 279</div>
      </h3>
      <ul>
        <li>Applicable on: Orders above <?php echo CURRENCY; ?>. 2499 (only on first purchase)</li>
        <li>Coupon code: <b> HRXEID400</b></li>
        <li>Coupon Discount: <?php echo CURRENCY; ?>. 400 off (check cart for final savings)</li>
      </ul>
      <a href="#" class="viewproducts">View Eligible Products</a>
      <h2 class="emi">EMI option available</h2>
      <ul>
        <li>EMI starting from <?php echo CURRENCY; ?>.32/month</li>
      </ul>
      <br>
      <a href="#" class="viewplan">View Plan</a>
    </div>
    <div></div>
  </div>
  <div class="productsdetails">
    <h2 class="productsdetailsh2">PRODUCT DETAILS </h2>
    <ul>
      <li>Maroon solid casual shirt,</li>
      <li>has a mandarin collar,</li>
      <li>long sleeves, curved hem</li>
    </ul>
    <h3>Size & Fit</h3>
    <ul>
      <li>Regular Fit</li>
      <li>The model (height 6') is wearing a size 40</li>
    </ul>
    <h3>Material & Care</h3>
    <ul>
      <li> 100% Cotton</li>
      <li>Machine-wash</li>
    </ul>


  </div>



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
  <!-- footer start-->






  <footer>
    <div class="footermain">
      <div class="app">
        <h3>EXPERIENCE HRX APP ON MOBILE</h3>
        <a href="#">
          <img src="../../img/google_play.png" alt="" srcset="">
        </a><br>
        <a href="#">
          <img src="../../img/apple_store.png" alt="" srcset="">
        </a>
      </div>
      <div class="aboutus">
        <h3>ABOUT US</h3>
        <p>
          HRX is a major Bangladeshi fashion e-commerce company headquartered in Dhaka, Bangladesh. The company was founded in 2012 to sell personalized gift items. In May 2014, HRX began selling fashion and lifestyle products and moved away from personalisation. By 2018 HRX offered products from 350 Bangladeshi and International brands.
        </p>
      </div>
      <div class="social">
        <h3>KEEP IN TOUCH
        </h3>
        <ul>
          <li><a href="#"><img src="../../img/fb.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="../../img/insta.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="../../img/twitter.png" alt="" srcset=""></a></li>
          <li><a href="#"><img src="../../img/link.png" alt="" srcset=""></a></li>
        </ul>
      </div>

    </div>
  </footer>
</body>

</html>