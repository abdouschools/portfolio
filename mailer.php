<?php

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
require_once 'vendor/autoload.php';
if (!empty($_POST['name']) && !empty($_POST['subject']) && !empty($_POST['email']) && !empty($_POST['message'])) {
    $subject = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['subject']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if (filter_var($email, FILTER_VALIDATE_EMAIL))
        $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                   //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

        $mail->Username   = 'mail@gmail.com';                     //SMTP username
        $mail->Password   = 'password';                               //SMTP password


        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Accepter SSL
        $mail->Port = 465;                                 //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->CharSet = "utf-8";
        $mail->setFrom($email, 'Mailer');

        $mail->addAddress('email@gmail.com', $surname);     //Add a recipient
        $mail->addAddress('email@gmail.com');               //Name is optional

        $mail->addReplyTo($email, $surname);
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->AltBody = $message;

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
