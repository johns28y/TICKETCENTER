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
           <input type = "button" value = "Home"  onclick = "window.location.href ='http://localhost/website/TicketCenterHome.php';"/>  
        </form>
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}
$sql = 'SELECT sport, hometeam, awayteam, sport_id FROM Sport where sport_id = (select max(sport_id) from Sport)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$sport = $data[0]['sport'];
$hometeam = $data[0]['hometeam'];
$awayteam = $data[0]['awayteam'];
$sport_id = $data[0]['sport_id'];
echo "$sport, $hometeam, $awayteam, $sport_id";
?> <p>
<input type = "button" value = "Completed" onclick = "window.location.href = '/website/TicketCenterHome.php';"/></p>
	