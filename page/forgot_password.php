
<?php
$showAlert_OTP_send = false;
if($_SERVER["REQUEST_METHOD"]=="POST") {
include '../db/connect.php' ;
$name=$_POST [ "name" ] ;
$username=$_POST [ "username" ] ;
$password=$_POST [ "password" ] ;
$cpassword=$_POST [ "cpassword" ] ;
$email=$_POST [ "email" ] ;
$address=$_POST [ "address" ] ;
$address2=$_POST [ "address2" ] ;
$number=$_POST [ "number" ] ;


$exists=false;
if(($password==$cpassword) && $exists==false){
        $sql = "INSERT INTO `user` (`name`, `user_name`, `user_password`, `user_email`, `user_address`, `user_address_2`, `user_number`) VALUES ('$name', '$username', '$password', '$email', '$address', '$address2', '$number')";
        $result= mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }
} 
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

    <link rel="shortcut icon" href="../img/fab.png" type="../image/x-icon">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1636192990/magicmouse/magic_mouse-1.2.1.cdn.min.js"></script>
<script src="../js/js_own.js"></script>

<title>HRX | Forgot Password</title>
 </head>
<body>


<?php 
if($showAlert_OTP_send){
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Sucess!</strong>We send an OTP in your mail. Check it and enter the OTP
<button type="button" clase="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
}
?>





<!-- -->
<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              

                <!-- Forgot Password -->
<div class="otp_send_form">   <!-- Div for hide and seak -->
                <h2 class="text-uppercase text-center mb-5">Forgot Password</h2>
              <form action="/Fashion-Store/page/reg.php" method="post">
                <div class="form-outline mb-5">
                  <input type="email" id="email" name="email" placeholder="Enter Your Email"  id="email" name="email" class="form-control form-control-lg" />
                </div>             
                  <div class="d-flex justify-content-center">
                  <button type="button" style="background: #f3c6f7;" onclick="send_otp()"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Send OTP</button>
                </div>
              </form></div>

              <div class="otp_submit_form">   <!-- Div for hide and seak -->
              <h2 class="text-uppercase text-center mb-5">OTP</h2>
                 <!-- OTP send code-->
              <form action="/Fashion-Store/page/reg.php" method="post">
                <div class="form-outline mb-5">
                  <input type="number" placeholder="Enter OTP"  id="otp" name="otp" class="form-control form-control-lg" />
                </div>             
                  <div class="d-flex justify-content-center">
                  <button type="button" style="background: #f3c6f7;"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>
              </form>
</div>
                        
              <div class="reset_pass_form">   <!-- Div for hide and seak -->
              <h2 class="text-uppercase text-center mb-5">Reset Password</h2>
                 <!-- OTP send code-->
              <form action="/Fashion-Store/page/reg.php" method="post">
                <div class="form-outline mb-4">
                  <input type="number" placeholder="Enter new password"  id="password" name="password" class="form-control form-control-lg" />
                </div>       
                <div class="form-outline mb-4">
                  <input type="number" placeholder="Confrom Password"  id="cpassword" name="cpassword" class="form-control form-control-lg" />
                </div> 
                
                  <div class="d-flex justify-content-center">
                  <button type="button" style="background: #f3c6f7;"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Submit</button>
                </div>
              </form>
</div>

<script>
  //OTP send function #3
function send_otp(){
    var email=jQuery('#email').val();
    jQuery.ajax({
      url:'../backend/send_otp.php',
      type:'post',
      data:'email='+email,
      success:function(result){
        if(result=='yes'){
          jQuery('.otp_send_form').hide();
          jQuery('.otp_submit_form').show();
        }
      }
    })
}

function submit_otp(){
	var otp=jQuery('#otp').val();
	jQuery.ajax({
		url:'../backend/check_otp.php',
		type:'post',
		data:'otp='+otp,
		success:function(result){
			if(result=='yes'){
        jQuery('.otp_send_form').hide();
          jQuery('.otp_submit_form').hide();
          jQuery('.reset_pass_form').show();
			}
			if(result=='not_exist'){
				jQuery('#otp_error').html('Please enter valid otp');
			}
		}
	});
}
  </script>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>