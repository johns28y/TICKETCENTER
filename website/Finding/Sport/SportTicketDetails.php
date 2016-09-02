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
  $sql = 'SELECT * FROM Sport where sport_id='.$getId; 
foreach($connection->query($sql) as $row){
    $starathlete1 = $row['starathlete1'];
    $starathlete2 = $row['starathlete2'];
    $stadium = $row['stadium'];
    $city = $row['city'];
    $gametime = $row['gametime'];
    $seat = $row['seat'];
    $awayteam = $row['awayteam'];
    $hometeam = $row['hometeam'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $awayteam . '<br>';
    echo $hometeam . '<br>';
    echo $starathlete1 . '<br>';
    echo $starathlete2 . '<br>';
    echo $stadium . '<br>';
    echo $city . '<br>';
    echo $gametime . '<br>';
    echo $seat . '<br>';
    echo '</div>';
}
?>
<div class = "ticket">
<br>
<input type = "button" value = "Take this ticket" onclick = "window.location.href = '/website/Finding/Concert/SquareCash/SquareEmailPhone.php';"/>
   </body>
</html>

    
