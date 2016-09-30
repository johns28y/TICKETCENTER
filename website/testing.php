<?php 
$salt = openssl_random_pseudo_bytes(32); 
$hash = 'Buffalo';
$password = hash('sha256', $hash.$salt);
echo $password;
?>