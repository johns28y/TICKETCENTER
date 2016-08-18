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
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
  $getId=$_GET["id"];
  $sql = 'SELECT * FROM Concert where concert_id='.$getId; 
   foreach($connection->query($sql) as $row){
    $venue = $row['venue'];
    $performer = $row['performer'];
    $city = $row['city'];
    $showtime = $row['showtime'];
    $seat = $row['seat'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $venue . '<br>';
    echo $performer . '<br>';
    echo $city . '<br>';
    echo $showtime . '<br>';
    echo $seat . '<br>';
    echo '</div>';  
}   
      
?>  

<div class = "ticket">
<input type = "button" value = "Take this ticket" onclick = "window.location.href = '/website/Finding/Concert/SquareCash/SquareEmail.php';"/>
   </body>
</html>
