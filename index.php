<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');

	}
  include'db/connect.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="shortcut icon" href="img/fab.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
<script src="js/js_own.js"></script>

<title>HRX | Home</title>
 </head>
 <body>
<header>
        <div class="logo"><img src="img/icon.png" alt="" srcset=""></div>
    <div> <div class="uper"> <div class="dropdown">
            <button class="dropbtn">Men</button>
            <div class="dropdown-content">
              <a href="page/Men/topware.php">Topwear</a>
              <a href="#">Bottomwear</a>
              <a href="#">Sports & Active wear</a>
              <a href="#">Festive wear</a>
           
              <a href="#">Footwear</a>
                 <a href="#">Accessories</a>
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn">Woman</button>
            <div class="dropdown-content">
              <a href="#">Desi & Fusion wear</a>
              <a href="#">Western wear</a>
              <a href="#">Jewellery</a>
              <a href="#">Sports & Active wear</a>
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
              <a href="#">Skincare,Bath & Body</a>
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

        </div> </div>
          <input class="search" type="search" name="" id="" placeholder="search for products, bands and more">
          <div class="dropdown2">
          <button class="dropbtn2">Login</button>
              <div class="dropdown-content2">
              <form>
            
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
               
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                
                <a href="#!">Forgot password?</a>
              </div>
            </div>

           
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

           
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
<!-- 
<div class="uper side"> 
  <div class="dropdown dlogin">
            <button class="dropbtn blogin" top="-9px">Login </button>
                      <form>
            
            <div class="form-outline mb-4">
              <input type="email" id="form2Example1" class="form-control" />
              <label class="form-label" for="form2Example1">Email address</label>
            </div>

            
            <div class="form-outline mb-4">
              <input type="password" id="form2Example2" class="form-control" />
              <label class="form-label" for="form2Example2">Password</label>
            </div>

            
            <div class="row mb-4">
              <div class="col d-flex justify-content-center">
               
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                  <label class="form-check-label" for="form2Example31"> Remember me </label>
                </div>
              </div>

              <div class="col">
                
                <a href="#!">Forgot password?</a>
              </div>
            </div>

           
            <button type="button" class="btn btn-primary btn-block mb-4">Sign in</button>

           
            <div class="text-center">
              <p>Not a member? <a href="#!">Register</a></p>
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
          </div> -->
  <!--...
  <div class="dropdown headerimg">
    <a href="#">
    <img src="img/cart.png" alt="" srcset="">
    <p>Cart</p>
   </a>
  </div> -->
  </div>
</header>
<div class="banner">
      <div class="video">
            <video autoplay="autoplay" width="100%" loop="loop" muted="muted" class="w-full object-cover banner-h350px mtz-cfejh">
                <source src="video/hrx.mp4" type="video/mp4">
                
                


            </video>
      </div>
      <div class="btext">
          <div class="btextbox">

          </div>
          <div class="btext_content">
                  <h4>HRX COLLECTION</h2>
                  <h1>FIND YOUR EDGE</h1>
                  <h4>Everything you need throughout your stylist journey</h3>
          </div>
      </div>
</div>
      <h1 class=bg_write>COLLECTION</h1>

<div class="deal_of_the_day">
        <h1>DEAL OF THE DAY</h1>

</div>




      <!-- Catagoris start -->
<div class="catag reveal">
  <a href="page/men.php"> 
  <div class="c_img_bg">
    <img src="img/men.png" alt="">
    <h3>Men</h3>
   
  </div></a>
  <div class="c_img_bg">
    <img src="img/woman.png" alt="">
    <h3>Woman</h3>
  </div>
  <div class="c_img_bg">
    <img class="bag_img" src="img/bag.png" alt="">
    <h3>Bagpack</h3>  
  </div>
  <div class="c_img_bg">
    <img src="img/shoes.png" alt="">
    <h3>shoes</h3>
  </div>
  <div class="c_img_bg ">
    <img  src="img/asscories.png" alt="">
    <h3>Asscories</h3>
  </div>
  <div class="c_img_bg">
    <img src="img/watch.png" alt="">
    <h3>Wareable</h3>
  </div>
  <div class="c_img_bg">
    <img src="img/sunglass1.png" alt="">
    <h3>Sunglass</h3>
  </div>
  <div class="c_img_bg ">
    <img class="fitness" src="img/fitness1.png" alt="">
    <h3>Fitness</h3>
  </div>
  
 
</div>
















<footer>
  <div class="footermain">
    <div class="app">
        <h3>EXPERIENCE HRX APP ON MOBILE</h3>
        <a href="#" >
            <img src="img/google_play.png" alt="" srcset="">
        </a><br>
        <a href="#"> 
            <img src="img/apple_store.png" alt="" srcset="">
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
            <li><a href="#"><img src="img/fb.png" alt="" srcset=""></a></li>
            <li><a href="#"><img src="img/insta.png" alt="" srcset=""></a></li>
            <li><a href="#"><img src="img/twitter.png" alt="" srcset=""></a></li>
            <li><a href="#"><img src="img/link.png" alt="" srcset=""></a></li>
       </ul>
    </div>

    </div>
  </footer>
 </body>
 </html>