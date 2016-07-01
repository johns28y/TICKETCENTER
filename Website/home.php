<!DOCTYPE HTML>
<html>  
    <head>
        <link rel = "stylesheet" type = "text/css" href = "styles.css">
        <title>
        Ticket Center
        </title>
    </head>
    <body>
        <div class = "ticket-list">
            <h5>
            Ticket Center
            </h5>
            <button type = "button"> Purchase
            <a href = "ticketindex.php"> </a></button>
          	<button type = "button"> Sell 
          	<a href = "composer.php"> </a> </button>
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname = bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO($dsn, $username, $password);
if (!$connection) {
    die('Connection failed' + mysql_error());

}
/*

4. Try to get an iverson silhouette up. 
*/
?>