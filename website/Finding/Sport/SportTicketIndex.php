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
         <input type = "button" value = "HOME" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
        </form>
        </div>
     
 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}

$sql = 'SELECT * FROM Sport'; 
foreach($connection->query($sql) as $row){
    $eventname = $row['eventname'];
    $address = $row['address'];
    $description = $row['description'];
    $sportid = $row['sportid'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo '<a href=SportTicketDetails.php?id='.$sportid.'>'. $eventname ." ". $address ." ". $description ." " ; 
    echo '</div>';
}
        
?>
    </body>
</html>
