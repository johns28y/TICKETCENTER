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
    //$timestamp = date("g:i a", strtotime("23:00"));
    date_default_timezone_set("America/New_York");
    $timestamp = date("Y-m-d h:i:s");
    echo $timestamp;
    $insert = "INSERT INTO posts (title, body, date) VALUES (?,?,?)";
    $prepared = $connection->prepare($insert);
    
    if($prepared->execute(array($title, $body, $timestamp))) {
        header('Location: http://localhost/website/index.php');
    } else {
        echo " error";
    }
} else {
    echo "nothing is posted";
}
$connection = NULL; 
?>
