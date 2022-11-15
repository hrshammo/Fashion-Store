<?php
session_start();
if (isset($_SESSION['uid'])) {
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

  <link rel="shortcut icon" href="../img/fab.png" type="image/x-icon">

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
  <script src="../js/js_own.js"></script>

  <title>HRX | Men</title>
</head>

<body>
  <!-- Will Show when user don't login -->
<?php
include '../before_login.php';
?>

  <!-- Will Show when user  login -->
  <?php
include '../after_login.php';
?>
  <div>
    <h1 class="headcls">CLOTHING FOR MEN</h1>
    <div class="ctag_u">
      <a href="Men/topware.php">
        <div class="c_img_bg_u ">
          <img class="ctag_img_u" src="../img/men/topware.jpg" alt="">
          <h3>Topwear</h3>
        </div>
      </a>
      <div class="c_img_bg_u ">
        <img class="ctag_img_u" src="../img/men/bottomware.jpg" alt="">
        <h3>Bottomwear</h3>
      </div>
      <div class="c_img_bg_u ">
        <img class="ctag_img_u" src="../img/men/festive.png" alt="">
        <h3>Festive Wear</h3>
      </div>
      <div class="c_img_bg_u ">
        <img class="ctag_img_u" src="../img/men/spors.jpg" alt="">
        <h3>Sportswear</h3>
      </div>
      <div class="c_img_bg_u ">
        <img class="ctag_img_u" src="../img/men/footwere.png" alt="">
        <h3>Footwere</h3>
      </div>
    </div>
  </div>



 <!-- Footer File call -->
 <?php 
  include '../footer.php';
  ?>
</body>

</html>