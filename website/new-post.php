<?php 
//first step make the connection
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 

if (!$connection) {
   die('Connection failed' + mysql_error());
}
if (!empty($_POST)) {
    $title = $_POST['title'];
    $body = $_POST['text'];
    $timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO posts (title, body, date) VALUES (?,?,?)";
    
    //echo $title;
    //echo $body;
    //echo $timestamp;
    
    
    //this prepared statement changed everything and enabled for my post to enter the database.
    $prepared = $connection->prepare($insert);
    
    if($prepared->execute(array($title, $body, $timestamp))) {
        header('Location: http://localhost/website/index.php');
    } else {
        echo "error";
    }
    
    /*

      $getID = "SELECT id FROM posts where title = '$title'"; 
        echo "your ticket posted successfully to database";
        header('Location: http://localhost/website/index.php?id=test');
    }else{
    echo "error processing your ticket";
    }
    */
} else {
    echo "nothing is posted";
}

$connection = NULL; 

?>


