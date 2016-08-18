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
           TICKET CENTER
           </h1>
     <form action = ""> 
         <input type = "button" value = "HOME" onclick = "window.location.href = '/website/bulletinboardhome.php';"/>
    </form>
     </div>
    
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=ticketcenter';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
$sql = 'SELECT concert_id, venue, performer, city FROM Concert'; 
foreach($connection->query($sql) as $row){
    $venue = $row['venue'];
    $performer = $row['performer'];
    $city = $row['city'];
    $concert_id = $row['concert_id'];
    echo '<div class = "ticket">';
    echo '<a href=ConcertTicketDetails.php?id='.$concert_id.'>'. $venue ." ". $performer ." ". $city ." " ; 
    echo '</div>';
}
?>    
    </body>
</html>
    
    
