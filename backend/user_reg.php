<?php
session_start();
include('../db/connect.php');
include('common_function.php');

if (isset($_POST['Register'])) {
    $ip = getIPAddress();
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $address2 = $_POST["address2"];
    $number = $_POST["number"];
    $encrypt_password = "";
    if ($password == $cpassword) {
        $encrypt_pass = password_hash($password, PASSWORD_BCRYPT);

        // $check_pass = password_verify($pass,$encrypt_pass);
    }
    $sql = "insert into user_info (name,username,user_email,user_password,user_ip,user_address,user_address2,user_mobile) values('$name','$username','$email','$encrypt_pass','$ip','$address','$address2','$number')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Registration Successful')</script>";
        echo "<script>window.open('../profile.php','_self')</script>";
    } else {
        die(mysqli_error($conn));
    }
}
