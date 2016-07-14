<?php 
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if (!$connection) {
   die('Connection failed' + mysql_error());
}

if (!empty($_POST)) {
    $venue = $_POST['venue'];
    $performer = $_POST['performer'];
    $city = $_POST['city'];
    $showtime = $_POST['showtime'];
    $seat = $_POST['seat'];
    $timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO Concertposts (venue, performer, city, showtime, seat) VALUES (?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($venue, $performer, $city, $showtime, $seat))) {
        header('Location: http://localhost/website/ShowSellerID.php');
    } else {
        echo "error";
    }
    
  
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>



