<!DOCTYPE HTML>
<html>  
    <head>
        <link rel = "stylesheet" type = "text/css" href = "../../styles.css">
        <title>
        TICKET CENTER
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
        <br>
 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
} 
  $getId=$_GET["id"];
  $sql = 'SELECT * FROM Sport where sportid='.$getId; 
foreach($connection->query($sql) as $row){
    $eventname = $row['eventname'];
    $address = $row['address'];
    $description = $row['description'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $eventname . '<br>';
    echo $address . '<br>';
    echo $description . '<br>';
    echo '</div>';
}
?>
<div class = "ticket">
<br>
<input type = "button" value = "Take this ticket" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
   </body>
</html>

    
