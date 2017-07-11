<?php

    /*
     *developed by: Akinyemi Olumide Emmanuel
     */

    function SendMail( $recepientEmail, $recepientName, $subject, $body, $altBody ) {
        require_once "PHPmailer/PHPMailerAutoload.php";
        $mail = new PHPMailer;
        
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;

        $mail->Username = '****@***.com';
        $mail->Password = '***';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->From = '****@***.com';
        $mail->FromName = '****@***.com';
        $mail->addAddress("$recepientEmail", "$recepientName");
        
        // $mail->WordWrap = 50;
        $mail->isHTML(true);
        
        $mail->Subject = "$subject";
        $mail->Body    = "$body";
        $mail->AltBody = "$altBody";
        
        if(!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }         
    }

?>