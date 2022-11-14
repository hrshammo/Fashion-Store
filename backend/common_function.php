<?php
// include('../db/connect.php');
// getting ip address
function getIPAddress()
{
   //whether ip is from the share internet  
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
      $ip = $_SERVER['HTTP_CLIENT_IP'];
   }
   //whether ip is from the proxy  
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
   }
   //whether ip is from the remote address  
   else {
      $ip = $_SERVER['REMOTE_ADDR'];
   }
   return $ip;
}

//getting all products
function getAllProducts()
{
   $conn = mysqli_connect('localhost', 'root', '', 'eco_admin');
   $sql = "select * from product";
   $res = mysqli_query($conn, $sql);
   if ($res) {
      while ($row = mysqli_fetch_array($res)) {
         $product_id = $row['p_id'];
         $product_image = $row['p_img1'];
         $product_name = $row['p_name'];
         $product_price = $row['p_price'];

         echo '<form class="ctag_u" action="#" method="get"><div class="ctag_u">
         <a href="product.php?id=' . $product_id . '">
           <div class="c_img_bg_u ">
             <img class="ctag_img_u" src="img/' . $product_image . '" alt="">
             <h3>' . $product_name . '</h3>
             <h4>৳.' . $product_price . '</h4>
         </a>
         <button class="add_to_cart"> Add to Cart </button>
       </div></form>';
      }
   } else {
      die(mysqli_error($conn));
   }
}


function getSearchedProducts()
{
   if (isset($_POST['search_key'])) {
      $conn = mysqli_connect('localhost', 'root', '', 'eco_admin');

      $key = $_POST['search_key'];
      $sql = "select * from product where p_keyword like '%$key%'";
      $res = mysqli_query($conn, $sql);
      if ($res) {
         while ($row = mysqli_fetch_array($res)) {
            $product_id = $row['p_id'];
            $product_image = $row['p_img1'];
            $product_name = $row['p_name'];
            $product_price = $row['p_price'];

            echo '<form class="ctag_u" action="#" method="get"><div class="ctag_u">
         <a href="product.php?id=' . $product_id . '">
           <div class="c_img_bg_u ">
             <img class="ctag_img_u" src="img/' . $product_image . '" alt="">
             <h3>' . $product_name . '</h3>
             <h4>৳.' . $product_price . '</h4>
         </a>
         <button class="add_to_cart"> Add to Cart </button>
       </div></form>';
         }
      } else {
         die(mysqli_error($conn));
      }
   }
}

// get product by category and sub-catagory
function getProductsByCategory()
{
   if (isset($_GET['ctg'])) {
      $full_ctg = $_GET['ctg'];
      $split_ctg = explode("/", $full_ctg);
      $ctg = $split_ctg[0];
      $sub_ctg = $split_ctg[1];

      $conn = mysqli_connect('localhost', 'root', '', 'eco_admin');
      $sql = "select * from product where p_ctag='$ctg' and p_sub_ctag='$sub_ctg'";
      $res = mysqli_query($conn, $sql);
      if ($res) {
         while ($row = mysqli_fetch_array($res)) {
            $product_id = $row['p_id'];
            $product_image = $row['p_img1'];
            $product_name = $row['p_name'];
            $product_price = $row['p_price'];

            echo '<form class="ctag_u" action="#" method="get"><div class="ctag_u">
         <a href="product.php?id=' . $product_id . '">
           <div class="c_img_bg_u ">
             <img class="ctag_img_u" src="img/' . $product_image . '" alt="">
             <h3>' . $product_name . '</h3>
             <h4>৳.' . $product_price . '</h4>
         </a>
         <button class="add_to_cart"> Add to Cart </button>
       </div></form>';
         }
      } else {
         die(mysqli_error($conn));
      }
   }
}
