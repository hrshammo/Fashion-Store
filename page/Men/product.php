<?php
	session_start();
	if(isset($_SESSION['uid'])){
		header('location:profile.php');
	}
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
        <a href="../index.php">
        <div class="logo"><img src="../../img/icon.png" alt="" srcset=""></div></a>
    <div> <div class="uper"> <div class="dropdown">
            <button class="dropbtn">Men</button>
            <div class="dropdown-content">
              <a href="Men/topware.php">Topwear</a>
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

<div class="uper side"> <div class="dropdown headerimg">
    <a href="#">
    <img src="../../img/profile.png" alt="" srcset="">
    <p>Profile</p>
   </a>
  </div>
 
  <div class="dropdown headerimg">
    <a href="#">
    <img src="../../img/cart.png" alt="" srcset="">
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

<!-- product details-->
<div class="image ">
      <img class="none" src="img/img.jpg" data-thumb="" alt="" /> 
        <img class="none" src="img/img1.jpg" data-thumb="demo/images/up.jpg" alt="" title="" />
        <img src="img/img2.jpg" data-thumb="demo/images/walle.jpg" alt="" data-transition="slideInLeft" /> 
        <img src="img/img3.jpg" data-thumb="demo/images/nemo.jpg" alt="" title="" /> 
 </div>   
  
 
 
  
  


<div class="details">
  <h1>HIGHLANDER</h1>
  <h2 class="detailsx">Men Maroon & Black Slim Fit Checked Casual Shirt</h2>
  <button class="rateing"> <b>4.5*</b> <i>| 1.1k Ratings</i> </button>

  <h2 class="detailsy" >Rs. 545  <del>Rs. 1299</del> <div class="orange">(58% OFF)</div></h2>
  <h3>SELECT SIZE   <a href="#">SIZE CHART ></a></h3>


  
    <div class="radio-toolbar">
      <input type="radio" id="radio38" name="radioFruit" value="38"  >
      <label class="mlxl" for="radio38">38</label>
  
      <input type="radio" id="radio40" name="radioFruit" value="40" >
      <label for="radio40">40</label>
  
      <input type="radio" id="radio42" name="radioFruit" value="42" >
      <label for="radio42">42</label> 
      <input type="radio" id="radio44" name="radioFruit" value="44" >
      <label for="radio44">44</label> 
      <input type="radio" id="radio46" name="radioFruit" value="46" >
      <label for="radio46">46</label> 
  </div>
  <p>&nbsp;</p>

<button class="addbagb">ADD TO BAG</button>
<button class="wishlistb">WISHLIST</button>

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
    <h3>Best Price: <div class="orange"> Rs. 279</div></h3>
    <ul>
      <li>Applicable on: Orders above Rs. 2499 (only on first purchase)</li>
      <li>Coupon code: <b> HRXEID400</b></li>
      <li>Coupon Discount: Rs. 400 off (check cart for final savings)</li>
    </ul>
    <a href="#" class="viewproducts">View Eligible Products</a>
    <h2 class="emi">EMI option available</h2>
    <ul>
      <li>EMI starting from Rs.32/month</li>
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


<!-- footer start-->






<footer>
  <div class="footermain">
    <div class="app">
        <h3>EXPERIENCE HRX APP ON MOBILE</h3>
        <a href="#" >
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
 