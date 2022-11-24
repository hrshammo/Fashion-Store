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

    <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
    <script src="../../js/js_own.js"></script>

    <title>HRX | Men | Topwear</title>
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
                            <a href="topware.php?ctg=Beauty/Men Grooming">Men Grooming</a>
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
        <h3 class="link_w"> <a href="../../index.php">Home /</a> <small>Searching For</small> </h3>
        <div class="p_show">

            <!-- call product function to display all products -->
            <?php
            getSearchedProducts();
            ?>

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