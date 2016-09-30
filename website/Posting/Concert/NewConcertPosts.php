<?php 
$dsn = 'mysql:host=127.0.0.1; dbname=ticketcenter';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
if (!$connection) {
   die('Connection failed' + mysql_error());
}

if (!empty($_POST)){
    $concertname = $_POST['concertname'];//2
    $address = $_POST['address'];//3
    $groupname = $_POST['groupname'];//4
    $description = $_POST['description'];//5
    $time = $_POST['time'];
    $insert = "INSERT INTO CONCERT(concertname, address, groupname, description, time) VALUES (?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($concertname, $address, $groupname, $description, $time))) {
        header('Location: http://localhost/website/Posting/Concert/ShowConcertSellerID.php');
    } else {
        print_r($connection->errorInfo());
    }
} else {
    echo "nothing is posted";
}
$connection = NULL; 
?>




