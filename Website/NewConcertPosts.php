<?php 
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if (!$connection) {
   die('Connection failed' + mysql_error());
}

if (!empty($_POST)){
    $venue = $_POST['venue'];//1
    $performer = $_POST['performer'];//2
    $city= $_POST['city'];//3
    $showtime = $_POST['showtime'];//4
    $seat = $_POST['seat'];//5
    $timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO Concertposts (venue, performer, city, showtime, seat, date) VALUES (?,?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($venue, $performer, $city, $showtime, 
        $seat, $timestamp))) {
        header('Location: http://localhost/website/ShowConcertSellerID.php');
    } else {
        echo "error";
    }
} else {
    echo "nothing is posted";
}
$connection = NULL; 
?>




