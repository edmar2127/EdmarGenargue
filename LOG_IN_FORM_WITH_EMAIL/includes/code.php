<?php
session_start();
include('db.php');

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

 function sendemail_verify($name,$email,$verify_token)
{
    $mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hastagcrif@gmail.com';                     //SMTP username
    $mail->Password   = 'mjdhpdwtksbhdkzr';
    
    $mail->SMTPSecure ="ssl";           //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail-> setFrom('hastagcrif@gmail.com', 'Mailer');
    $mail->addAddress('hastagcrif@gmail.com', 'Joe User');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
   
    $email_template ="
        <h2>you have Registered with my name</h2>
        <h5>Verify your email address to login with below given link</h5>
        <br/><br/>
        <a href='http://localhost/login_register_with_email_verification/$verify_token'></a>
        ";

    $mail->Body = $email_template;    
    $mail->send();
    echo 'Message has been sent';
}

if(isset($_POST['register_btn']))

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $verify_token = md5(rand());

{

}

    



