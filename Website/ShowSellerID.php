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
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}
$sql = 'SELECT body, id FROM posts where id = (select max(id) from posts)';
$result = $connection->query($sql);
$data = $result->fetchAll();
$body = $data[0]['body'];
$id = $data[0]['id'];
echo "$body, $id";
</html> 
   </body> 
?>
	
