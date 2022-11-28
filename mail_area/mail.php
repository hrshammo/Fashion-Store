<?php
include('../db/connect.php');
session_start();
$user_email = $_SESSION['email'];
$otp = mt_rand(100000, 999999);
$sql = "update user_info set otp = '$otp' where user_email = '$user_email'";
$res = mysqli_query($conn, $sql);
if (!$res) {
    die(mysqli_error($conn));
}
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alemamsuvo@gmail.com';
    $mail->Password   = 'wrong@password';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    //$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('19202103242@cse.bubt.edu.bd', 'Administrator');
    $mail->addAddress($user_email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Password Reset';
    // $mail->Body    = file_get_contents("mail_template.php");
    $mail->Body    = ('Hey, we
    received a request to reset your
    password.<br><br>Your OTP is: <strong>' . $otp . '</strong><br><br>If you didn’t request for password reset, Don’t share it with others and You can ignore this message.<br><br><hr>Thanks,<br>The Fashion-store Team');
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        echo '<script>alert("Message has been sent to your mail")</script>';
        echo '<script>window.open("../page/check_otp.php","_self")</script>';
    } else {
        echo "Message could not be sent.";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
