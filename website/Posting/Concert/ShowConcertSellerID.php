<!DOCTYPE HTML>
<html>  
    <head>
        <link rel = "stylesheet" type = "text/css" href = "../../styles.css">
        <title>
        Bulletin Board
        </title>
    </head>
    <body>
        <div class = "ticket-list">
            <h1>
            Bulletin Board
            </h1>
        <form action = "">
           <input type = "button" value = "home"  onclick = "window.location.href ='http://localhost/website/bulletinboardhome.php';"/>  
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
$sql = 'SELECT venue, performer, city, concert_id FROM Concert where concert_id = (select max(concert_id) from Concert)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$venue = $data[0]['venue'];
$performer = $data[0]['performer'];
$city = $data[0]['city'];
$concert_id = $data[0]['concert_id'];
echo "$venue, $performer, $city, $concert_id";
?> <p>
<input type = "button" value = "Finished" onclick = "window.location.href = '/website/BulletinBoardHome.php';"/></p>