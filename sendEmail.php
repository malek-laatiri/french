<?php
include 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
$editor = $_POST["editor"];
$subject = $_POST["subject"];
$to = $_POST["to"];



try {

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "testagence6@gmail.com";
        $mail->Password   = "adAXvAGmav7uDsH";

        $mail->IsHTML(true);
        $mail->AddAddress($to, "recipient-name");
        $mail->SetFrom("testagence6@gmail.com", "from-name");
        $mail->AddReplyTo("testagence6@gmail.com", "reply-to-name");
        $mail->Subject = $subject;
        $mail->MsgHTML($editor);




        if (!$mail->Send()) {
            echo "Error while sending Email.";
            var_dump($mail);
        } else {
            echo "Email sent successfully";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
