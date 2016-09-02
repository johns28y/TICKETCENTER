/*
Twilio login information
Tyre Johnson
tyre@gatech.edu
YellowJacket1
phone number
*/
email:
	body = "Thank you for registering with Ticket Center. Your password is '{$_POST['password1']}'.";
	mail($_POST['email'], 'Registration Confirmation', $body, 'From: admin@ticketcenter.com');

<?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
//Go to the database connection file using a require command. 
require '../vendor/AutoLoad.php';
use Twilio\Rest\Client;
$sid = ACdce2fa2027f600d01c5f7d9318a64161;
$token = 380224e56cec4ecb99d74af6f67adc08;
$client = new Client($id, $token); 
$client -> messages ->create(

	)