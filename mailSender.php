<?php 
require_once "vendor/autoload.php";
require_once "vendor/phpmailer/phpmailer/src/PHPmailer.php";

function sendEmail($fromAddress, $fromName, $toName, $toAddress, $subject, $text)
{
   //PHPMailer Object
    $mail = new PHPMailer\PHPMailer\PHPMailer();



    $mail->IsSMTP();                                      // set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';
    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "antony.levchenko.test.mail@gmail.com";  // SMTP username
    $mail->Password = "testPassword1"; // SMTP password

    //From email address and name
    $mail->From = $fromAddress;
    $mail->FromName = $fromName;

//To address and name
    $mail->addAddress($toAddress, $toName);

//Address to which recipient will reply
    $mail->addReplyTo($fromAddress, $fromName);

//Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $text;
    $mail->AltBody = $text;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message has been sent successfully";
    }
}

?>