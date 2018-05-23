<?php 
require_once "mailSender.php";

$fromAddress = 'test@gmail.com';
$fromName = 'TestName';
$toName = 'Anton';
$toAddress = 'antony.levchenko@gmail.com';
$subject = 'Test letter';
$text = '<b> Hello there </b> <br> <p> Seems to be working. </p>';

sendEmail($fromAddress, $fromName, $toName, $toAddress, $subject, $text);

?>