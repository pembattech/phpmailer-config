<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($senderEmail, $senderName, $senderPassword, $recipientEmail, $recipientName) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $senderEmail;
        $mail->Password = $senderPassword;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress($recipientEmail, $recipientName);

        $mail->isHTML(true);
        $mail->Subject = 'Test Email from PHPMailer';
        $mail->Body = 'This is a test email sent using PHPMailer';

        $mail->send();
        return true; // Email sent successfully
    } catch (Exception $e) {
        return 'Email could not be sent. Error: ' . $mail->ErrorInfo;
    }
}

// Get user input
$senderEmail = readline("Enter your Gmail address: ");
$senderName = "Your Name";
$senderPassword = readline("Enter your Gmail password: ");
$recipientEmail = readline("Enter recipient's email address: ");
$recipientName = readline("Enter recipient's name: ");

$result = sendEmail($senderEmail, $senderName, $senderPassword, $recipientEmail, $recipientName);
if ($result === true) {
    echo 'Email sent successfully';
} else {
    echo $result;
}
?>
