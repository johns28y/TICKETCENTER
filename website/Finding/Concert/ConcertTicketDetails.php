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
  $getId=$_GET["id"];
  $sql = 'SELECT * FROM Concert where concertid='.$getId; 
   foreach($connection->query($sql) as $row){
    $concertname = $row['concertname'];
    $address = $row['address'];
    $groupname = $row['groupname'];
    $description = $row['description'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $concertname . '<br>';
    echo $address . '<br>';
    echo $groupname . '<br>';
    echo $description . '<br>';
    echo '</div>';  
}   
      
?>  

<div class = "ticket">
<input type = "button" value = "Take this ticket" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
   </body>
</html>
