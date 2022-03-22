<<<<<<< HEAD
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST["email"];
    $message = $_POST['message'];


    if (empty($name) or empty($email) or empty($message)) {
        echo "please fill in the fields";
    } else {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com;';
            $mail->SMTPAuth = true;
            $mail->Username = 'emetisuccess@gmail.com';
            $mail->Password = '79396770';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress($email);
            $mail->addAddress($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'Subject';
            $mail->Body = $message;
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo "Mail has been sent successfully!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
=======
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $email = $_POST["email"];
    $message = $_POST['message'];


    if (empty($name) or empty($email) or empty($message)) {
        echo "please fill in the fields";
    } else {
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com;';
            $mail->SMTPAuth = true;
            $mail->Username = 'emetisuccess@gmail.com';
            $mail->Password = '79396770';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress($email);
            $mail->addAddress($email, $name);

            $mail->isHTML(true);
            $mail->Subject = 'Subject';
            $mail->Body = $message;
            $mail->AltBody = 'Body in plain text for non-HTML mail clients';
            $mail->send();
            echo "Mail has been sent successfully!";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
>>>>>>> 6b8b2b9d32abc3f559081f7bf79cd11a67434a04
}