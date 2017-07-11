<?php

    /*
     *developed by: Akinyemi Olumide Emmanuel
     */

    require 'mail.php';

    function registerEmail($recepientEmail, $recepientName, $body = null) {
        $subject = 'THANKS FOR REGISTERING ON GreenLite.ng';
        
        $message = '<h1>Thanks for registering on greenlite.ng</h1><br>';
        $message .= '<b>We are sure</b> you would enjoy your experience here.';

        $body = ($body == null) ? $message : $body ;
        
        SendMail( $recepientEmail, $recepientName, $subject, $body, strip_tags($body) );
    }

    function addBalanceEmail($recepientEmail, $recepientName, $body = null,  $amountPaid, $currentBalance ) {
        $subject = 'BALANCE UPDATED'; 

        $message = '<h1>Thanks for updating your balance on greenlite.ng</h1><br>';
        $message .= 'Amount Paid = $amountPaid .<br>';
        $message .= 'Current Balance = $currentBalance.<br>';
        
        $body = ($body == null) ? $message : $body ;
        
        SendMail( $recepientEmail, $recepientName, $subject, $body, strip_tags($body) );
    }

    function updatePasswordEmail($recepientEmail, $recepientName, $body = null) {
        $subject = 'PASSWORD UPDATED AT GreenLite.ng';

        $message = '<h1>You have just updated your greenlite.ng accont</h1><br>';
        $message .= 'You have changed your password!.';

        $body = ($body == null) ? $message : $body ;
        
        SendMail( $recepientEmail, $recepientName, $subject, $body, strip_tags($body) );
    }
    
?>