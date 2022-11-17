<?php
include('backend/common_function.php');
include('db/connect.php');
?>
<header>
  <div class="logo"><a href="index.php"><img src="img/icon.png" alt="" srcset=""></a></div>
  <div>
    <div class="uper">
      <form action="" method="get">
        <div class="dropdown">
          <button class="dropbtn">Men</button>
          <div class="dropdown-content">
            <a href="/page/Men/topware.php?ctg=Men/Topwear" name="ctg">Topwear</a>
            <a href="/page/Men/topware.php?ctg=Men/Sports and Active wear" name="ctg">Sports and Active wear</a>
            <a href="/page/Men/topware.php?ctg=Men/Bottomwear" name="ctg">Bottomwear</a>
            <a href="/page/Men/topware.php?ctg=Men/Festive wear" name="ctg">Festive wear</a>

            <a href="/page/Men/topware.php?ctg=Men/Footwear" name="ctg">Footwear</a>
            <a href="/page/Men/topware.php?ctg=Men/Accessories" name="ctg">Accessories</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Woman</button>
          <div class="dropdown-content">
            <a href="/page/Men/topware.php?ctg=Woman/Desi and Fusion wear">Desi and Fusion wear</a>
            <a href="#">Western wear</a>
            <a href="#">Jewellery</a>
            <a href="#">Sports and Active wear</a>
            <a href="#">Footwear</a>
            <a href="#">Accessories</a>
          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Kid</button>
          <div class="dropdown-content">
            <a href="#">Boys Clothing</a>
            <a href="#">Girls Clothing</a>
            <a href="#">Boys Footwear</a>
            <a href="#">Girls Foorwear</a>
            <a href="#">Infants</a>
            <a href="#">Kid Accessories</a>

          </div>
        </div>

        <div class="dropdown">
          <button class="dropbtn">Beauty</button>
          <div class="dropdown-content">
            <a href="#">Makeup</a>
            <a href="#">Skincare,Bath and Body</a>
            <a href="#">Haircare</a>
            <a href="#">Fragrances</a>
            <a href="#">Men's Grooming</a>
            <a href="#">Beauty Gift</a>

          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Accessories</button>
          <div class="dropdown-content">
            <a href="#">Watch</a>
            <a href="#">Sunglasses</a>
            <a href="#">Belts</a>
            <a href="#">Bath Accessories</a>
            <a href="#">Others</a>


          </div>
        </div>
      </form>
    </div>
  </div>
  <form action="/page/Men/search_products.php" method="post"><input class="search" type="search" name="search_key" id="" placeholder="search for products, bands and more"></form>

  <div class="dropdown2">
    <button type="submit" class="dropbtn2" onclick="loginpage()">Login</button>

    <div class="dropdown-content2" style="display:none" id="LoginForm">

      <form action="backend/user_login.php" method="post">
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

            <a href="page/forgot_password.php">Forgot password?</a>
          </div>
        </div>


        <button type="submit" class="btn btn-primary btn-block mb-4" name="login">Sign in</button>


        <div class="text-center">
          <p>Not a member? <a href="page/reg.php">Register</a></p>
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

  </div>
  <div class="uper  side2">

    <?php
    $ip = getIPAddress();
    $sql = "select * from cart_details where ip_address = '$ip'";
    $res = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($res);
    ?>
    <div class="dropdown headerimg">
      <a href="/page/cart.php">
        <img src="img/cart.png" alt="" srcset=""><sup><?php echo $row_count; ?></sup>
        <p>Cart</p>
      </a>
    </div>
  </div>
</header>