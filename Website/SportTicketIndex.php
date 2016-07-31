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
         <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
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

$sql = 'SELECT * FROM Sportposts'; 
foreach($connection->query($sql) as $row){
    $sport = $row['sport'];
    $hometeam = $row['hometeam'];
    $awayteam = $row['awayteam'];
    $id = $row['id'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo '<a href=SportTicketDetails.php?id='.$id.'>'. $sport ." ". $hometeam ." ". $awayteam ." " ; 
    echo '</div>';
}
        
?>
    </body>
</html>