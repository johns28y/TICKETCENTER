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
          
        $getId=$_GET["id"];
        $sql = 'SELECT * FROM posts where id='.$getId; 
        //input phone number variable above        
foreach($connection->query($sql) as $row){
    $title = $row['title'];
    $body = $row['body'];
    $id = $row['id'];
    //create a phone number variable.
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo 'Title:'. $title. '<br>';
    echo 'Body: '. $body. '<br>';
    echo '</div>';
}
      
?>
        
   </body>
</html>

    