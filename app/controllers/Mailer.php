<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';


class Mailer extends Controller{
    // public function __construct(){
    //     if(isset($_POST['mail']))
    //         var_dump($_POST);
    // }

    public function index(){
        if(isset($_POST['mail'])){
            //Nanti dulu
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = '';
            $mail->Password = '';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('');
            $mail->addAddress($_POST['email']);

            $mail->isHTML(true);
            $mail->Subject = $_POST['subject'];
            $mail->Body = $_POST['message'];

            $mail->send();
        
            echo "EMAIL DIKIRIM";
        }

    }
}