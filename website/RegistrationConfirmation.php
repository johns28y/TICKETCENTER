<?php
//the message 

/*$to = '' use the same sql commands that I use for finding we are getting the last registered user in the database, so the latest entry in the database we will send an email out to that person */

$message = 'Duudeee. Welcome to Ticket Center.  We look forward to becoming your official destination of purchasing and selling tickets of live concert and sporting events';


$from = 'Tyre@ticketcenter.com';


$subject = 'Registration Confirmation'; 


mail($to, $subject, $message, $from);

?>