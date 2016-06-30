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
            <a href= "home.php" > Go Home </a> 
        </div>

<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
$sql = 'SELECT title, body, date FROM posts'; 
foreach($connection->query($sql) as $row){
    $title = $row['title'];
    $body = $row['body'];
    $date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $title ." ". $body." ". $date;
    echo '</div>';
}
?>

    </body>
</html>