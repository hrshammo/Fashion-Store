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
    <link rel="stylesheet" href="../style.css">

    <link rel="shortcut icon" href="../../img/fab.png" type="image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
<script src="../../js/js_own.js"></script>

<title>HRX | Men | Topwear</title>
 </head>
 <body>
    <?php require 'menu.php' ?>
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