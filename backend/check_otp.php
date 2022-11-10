<?php
session_start();

include('../db/connect.php');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($conn,"select * from user_info where user_email='$email' and otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($conn,"update user set otp='' where user_email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>