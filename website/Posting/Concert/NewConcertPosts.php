<?php 
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if (!$connection) {
   die('Connection failed' + mysql_error());
}
//$phone

if (!empty($_POST)){
    $venue = $_POST['venue'];//1
    $performer = $_POST['performer'];//2
    $city = $_POST['city'];//3
    $showtime = $_POST['showtime'];//4
    $seat = $_POST['seat'];//5
    $emailaddress = $_POST['emailaddress'];
    $phonenumber = $_POST['phonenumber'];
    $ticketcost = $_POST['ticketcost'];
    //$timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO Concert(venue, performer, city, showtime, seat, emailaddress, phonenumber, ticketcost) VALUES (?,?,?,?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($venue, $performer, $city, $showtime, $seat, $emailaddress, $phonenumber,          $ticketcost))) {
        header('Location: http://localhost/website/Posting/Concert/ShowConcertSellerID.php');
    } else {
        echo "error";
    }
} else {
    echo "nothing is posted";
}
$connection = NULL; 
?>




