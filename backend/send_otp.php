<?php
session_start();
include('../db/connect.php');
$email=$_POST['email'];
$res=mysqli_query($conn,"select * from user_info where user_email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($conn,"update user set otp='$otp' where user_email='$email'");
	$html="Your otp verification code is ".$otp;
	$_SESSION['EMAIL']=$email;
	smtp_mailer($email,'OTP Verification',$html);
	echo "yes";
}else{
	echo "not_exist";
}

function smtp_mailer($to,$subject, $msg){
	require_once("../smtp/class.phpmailer.php");
	require('../smtp/class.smtp.php');
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'TLS'; 
	$mail->Host = "smtp.sendgrid.net";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "19202103269@cse.bubt.edu.bd";
	$mail->Password = "thenameis_SHAMMO";
	$mail->SetFrom("19202103269@cse.bubt.edu.bd");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
?>