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
$sql = 'SELECT sport, hometeam, awayteam, id FROM Sportposts where id = (select max(id) from Sportposts)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$sport = $data[0]['sport'];
$hometeam = $data[0]['hometeam'];
$awayteam = $data[0]['awayteam'];
$id = $data[0]['id'];
echo "$sport, $hometeam, $awayteam, $id";
?> <p>
<input type = "button" value = "Continue" onclick = "window.location.href = 'squarecashinformation.php';"/></p>
	