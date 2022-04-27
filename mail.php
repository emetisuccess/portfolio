<?php

// the message
// $msg = "First line of text\nSecond line of text";

// // use wordwrap() if lines are longer than 70 characters
// $msg = wordwrap($msg, 70);

// // send email
// mail("emetisuccess@gmail.com", "Emeti Etim is trying very hard", $msg);




use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Username = 'a6501e4ca437da'; // YOUR gmail email
    $mail->Password = '2e8fa7e22d2644'; // YOUR gmail password
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 2525;


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