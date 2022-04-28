<?php include("includes/header.php"); ?>
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


if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    if (
        empty($name) or empty($subject)
        or empty($email) or empty($message)
    ) {
        // check for empty fields;
        $_SESSION['check'] = "<p class='text-danger text-center'>All Fields Are Required</p>";

        // redirect to home page
        header("Location: index.php");
    } else {

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

            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
            // $mail->isSMTP();
            // $mail->Host = 'smtp.gmail.com';
            // $mail->Username = 'emetisuccess@gmail.com'; // YOUR gmail email
            // $mail->Password = '79396770'; // YOUR gmail password
            // $mail->SMTPAuth = true;
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            // $mail->Port = 587;


            // Sender and recipient settings
            $mail->setFrom($email, $name);
            $mail->addAddress('emetisuccess@gmail.com', 'Emeti Etim');
            $mail->addReplyTo($email, $name); // to set the reply to

            // Setting the email content
            $mail->IsHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

            $mail->send();

            $_SESSION['success'] = "<p class='text-success text-center'>Message Successfully Sent.</p>";

            // redirect to home page
            header("Location: index.php");
        } catch (Exception $e) {

            $_SESSION['error'] = "<p class='text-danger text-center'>Error in Sending Email. Mailer Error: {$mail->ErrorInfo}</p>";

            // redirect to home page
            header("Location: index.php");
        }
    }
}