<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'sendmail/Exception.php';
require 'sendmail/PHPMailer.php';
require 'sendmail/SMTP.php';

function sendMail($from, $to, $subject, $message)
{
    $result = 'Success';

    try {
        $mail = new PHPMailer(true);
        $mail->IsSMTP();
        $mail->CharSet = 'UTF-8';

        $mail->Host = 'ssl://smtp.gmail.com';               // SMTP server example
        $mail->SMTPDebug = 0;                               // enables SMTP debug information (for testing)
        $mail->SMTPAuth = true;                             // enable SMTP authentication
        $mail->Port = 465;                                  // set the SMTP port for the GMAIL server
        $mail->Username = 'etudiant.isi.java2@gmail.com';   // SMTP account username
        $mail->Password = 'abc123...';                      // SMTP account password

        $mail->addAddress($to);
        // https://github.com/PHPMailer/PHPMailer/issues/1214
        $mail->setFrom($from, $from, false);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
    } catch (Exception $e) {
        $result = 'Exception '.$e->getMessage();
    }

    return $result;
}
