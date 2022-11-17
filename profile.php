<?php
session_start();
include 'db/connect.php';
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
  <?php
  if (isset($_SESSION['username'])) {
    include 'after_login.php';
  } else {
    include 'before_login.php';
  }
  ?>

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

      </div>
    </a>
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
      <img src="img/asscories.png" alt="">
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















  <!-- Footer File call -->
  <?php
  include 'footer.php';
  ?>
</body>
</body>

</html>