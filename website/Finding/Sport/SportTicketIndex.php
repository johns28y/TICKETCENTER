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
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}

$sql = 'SELECT * FROM Sport'; 
foreach($connection->query($sql) as $row){
    $sport = $row['sport'];
    $hometeam = $row['hometeam'];
    $awayteam = $row['awayteam'];
    $sport_id = $row['sport_id'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo '<a href=SportTicketDetails.php?id='.$sport_id.'>'. $sport ." ". $hometeam ." ". $awayteam ." " ; 
    echo '</div>';
}
        
?>
    </body>
</html>