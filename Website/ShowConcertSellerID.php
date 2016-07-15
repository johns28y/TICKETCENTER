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
            <h1>
            Ticket Center
            </h1>
        <form action = "">
           <input type = "button" value = "home"  onclick = "window.location.href ='home.php';"/>  
        </form>
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}
$sql = 'SELECT venue, performer, city, id FROM Concertposts where id = (select max(id) from Concertposts)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$venue = $data[0]['venue'];
$performer = $data[0]['performer'];
$city = $data[0]['city'];
$id = $data[0]['id'];
echo "$venue, $performer, $city, $id";
?>