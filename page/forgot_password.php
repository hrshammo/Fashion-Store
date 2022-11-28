<?php
include('../db/connect.php');
session_start();
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

  <!-- -->
  <section class="vh-100 bg-image" style="background: rgb(145,230,247);
background: linear-gradient(90deg, rgba(145,230,247,1) 0%, rgba(210,167,236,1) 100%);">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">


                <!-- Forgot Password -->
                <div class="otp_send_form">
                  <!-- Div for hide and seak -->
                  <h2 class="text-uppercase text-center mb-5">Forgot Password</h2>
                  <form action="" method="post">
                    <div class="form-outline mb-5">
                      <input type="email" id="email" name="email" placeholder="Enter Your Email" class="form-control form-control-lg" style="width:30rem !important" required />
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" name="submit" style="background: #f3c6f7;" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Send OTP</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
  $email = $_POST['email'];

  $sql = "select * from user_info where user_email='$email'";
  $res = mysqli_query($conn, $sql);
  $count = mysqli_num_rows($res);
  if ($res) {
    if ($count > 0) {
      $row = mysqli_fetch_array($res);
      $id = $row['user_id'];
      $_SESSION['email'] = $email;

      echo "<script>window.open('../mail_area/mail.php', '_self')</script>";
      // echo "<script>window.open('mail_area/mail_template.php', '_self')</script>";
    } else {
      echo "<script>alert('we not found any account with this email address')</script>";
    }
  } else {
    die(mysqli_error($conn));
  }
}
?>