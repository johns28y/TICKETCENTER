<!DOCTYPE HTML>
<html>  
    <head>
        <link rel = "stylesheet" type = "text/css" href = "../../styles.css">
        <title>
        Ticket Center
        </title>
    </head>
    <body>
        <div class = "ticket-list">
            <h1>
            Ticket Center
            </h1>
        <form action = "">
           <input type = "button" value = "home"  onclick = "window.location.href ='http://localhost/website/TicketCenterHome.php';"/>  
        </form>
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=ticketcenter';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}
$sql = 'SELECT address, description FROM CONCERT where concert_id = (select max(concert_id) from CONCERT)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$address = $data[0]['address'];
$description = $data[0]['description'];
$concert_id = $data[0]['concert_id'];
echo "$address, $description, $concert_id";
?> <p>
<input type = "button" value = "Completed" onclick = "window.location.href = '/website/TicketCenterHome.php';"/></p>

