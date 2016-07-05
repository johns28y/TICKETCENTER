<?php 
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if (!$connection) {
   die('Connection failed' + mysql_error());
}

if (!empty($_POST)) {
    $title = $_POST['category'];
    $body = $_POST['location'];
    $timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO posts (title, body, date) VALUES (?,?,?)";


    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($title, $body, $timestamp))) {
        header('Location: http://localhost/website/ShowSellerID.php');
    } else {
        echo "error";
    }
    
  
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>



