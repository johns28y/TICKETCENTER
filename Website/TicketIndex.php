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
            <a href = "home.php"> 
                Go Home<br>
            </a> 
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
$sql = 'SELECT id, title, body, date FROM posts'; 
foreach($connection->query($sql) as $row){
    $title = $row['title'];
    $body = $row['body'];
    $id = $row['id'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo '<a href=TicketDetails.php?id='.$id.'>'. $title ." ". 
        $body . '</a>'; //." ". //$date;
    echo '</div>';
}
        //dynamic linking
/*$i = 0; 
while ($i < $num){
    $f1 = 
}
*/
?>
    </body>
</html>