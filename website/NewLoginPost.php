<?php
$dsn = 'mysql:host=127.0.0.1; dbname=ticketcenter';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
if (!$connection) {
    die('Connection failed' + mysql_error());
}

//using select sql method is key.
$sql = 'SELECT * FROM USER';
foreach ($connection->query($sql) as $row){
	$userid = $row['userid'];
	$email = $email['email'];
	$phonenumber = $phonenumber['phonenumber'];
	$passwordhash = $passwordhash['passwordhash'];
	$passwordsalt = $passwordsalt['passwordsalt'];
}