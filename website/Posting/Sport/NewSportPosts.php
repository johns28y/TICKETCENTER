<?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (!empty($_POST)){
    $eventname = $_POST['eventname'];//2
    $address = $_POST['address'];//3
    $description = $_POST['description'];//5
    $time = $_POST['time'];
    $insert = "INSERT INTO SPORT(eventname, address, description, time) VALUES (?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($eventname, $address, $description, $time))) {
        header('Location: http://localhost/website/Posting/Sport/ShowSportSellerID.php');
    } else {
        print_r($connection->errorInfo());
    }
} else {
    echo "nothing is posted";
}
$connection = NULL; 
?>






