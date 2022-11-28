<?php
include('../../db/connect.php');
session_start();
if (isset($_GET['id'])) {
    $data = $_GET['id'];
    $split = explode("/", $data);
    $order_id = $split[0];
    $invoice = $split[1];
    $sql = "select * from pending_orders where order_id = '$order_id' and invoice_number='$invoice'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $row = mysqli_fetch_array($res);
        $user_id = $row['user_id'];
        $user = "select * from user_info where user_id='$user_id'";
        $result = mysqli_query($conn, $user);
        if ($result) {
            $row = mysqli_fetch_array($result);
            $user_email = $row['user_email'];

            $sql = "update pending_orders set order_status = 'canceled' where order_id = '$order_id' and invoice_number='$invoice'";
            $res = mysqli_query($conn, $sql);
            if ($res) {
                $sql2 = "update user_orders set order_status = 'canceled' where order_id = '$order_id' and invoice_number='$invoice'";
                $res2 = mysqli_query($conn, $sql2);
                if ($res2) {
                    $sql3 = "delete from pending_orders where order_id = '$order_id' and invoice_number='$invoice'";
                    $res3 = mysqli_query($conn, $sql3);
                }
            } else {
                die(mysqli_error($conn));
            }
        } else {
            die(mysqli_error($conn));
        }
    } else {
        die(mysqli_error($conn));
    }
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
    $mail->Host       = 'smtp-pulse.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'alemamsuvo@gmail.com';
    $mail->Password   = 'f4NHgcDCBYjGe3C';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    //$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('19202103242@cse.bubt.edu.bd', 'Administrator');
    $mail->addAddress($user_email);     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Cancel Order';
    // $mail->Body    = file_get_contents("mail_template.php");
    $mail->Body    = ('Sorry, your order has been canceled as the product is currently unavailable to us.<br><br>Visit your profile for view your product status.<br><br>Stay with us. Take Care<br><br><hr>Thanks,<br>The Fashion-store Team');
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if ($mail->send()) {
        echo '<script>alert("Order Canceled")</script>';
        echo '<script>window.open("../view_orders.php","_self")</script>';
    } else {
        echo "Email could not be sent.";
    }
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
