<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';


if (isset($_POST["send"])) {

    // $to = "emetisuccess@gmail.com";
    // $subject = wordwrap($_POST["subject"], 70);
    // $body = $_POST["message"];
    // $header = $_POST["email"];
    // $mail = mail($to, $subject, $body, $header);

    // if ($mail == true) {
    //     echo "Message sent successfully...";
    // } else {
    //     echo "Message could not be sent: {$mail->ErrorInfo}";
    // }

    // passing true in constructor enables exceptions in PHPMailer

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Username = 'emetisuccess@gmail.com'; // YOUR gmail email
        $mail->Password = 'jcwtxblevtdicyqo'; // YOUR gmail password
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Sender and recipient settings
        $mail->setFrom('emecoder@gmail.com', 'Emetisuccess');
        $mail->addAddress('emetisuccess@gmail.com', 'Emeti Etim');
        $mail->addReplyTo('emecoder@gmail.com', 'Emetisuccess'); // to set the reply to

        // Setting the email content
        $mail->IsHTML(true);
        $mail->Subject = "Testing Email sending format";
        $mail->Body = 'i love HTML message body. <b>Gmail</b> SMTP email body.';
        $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

        $mail->send();
        echo "Email message sent.";
    } catch (Exception $e) {
        echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
    }
}