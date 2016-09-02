<?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (!empty($_POST)) {
    $sport = $_POST['sport'];//1
    $hometeam = $_POST['hometeam'];//2
    $awayteam = $_POST['awayteam'];//3
    $starathlete1 = $_POST['starathlete1'];//4
    $starathlete2 = $_POST['starathlete2'];//5
    $stadium = $_POST['stadium'];//6
    $city = $_POST['city'];//7
    $gametime = $_POST['gametime'];//8
    $seat = $_POST['seat'];//9
    $emailaddress = $_POST['emailaddress'];//10
    $phonenumber = $_POST['phonenumber'];//11
    $ticketcost = $_POST['ticketcost'];//12
    
   // $timestamp = date('Y-m-d H:i:s');
    $insert = "INSERT INTO Sport(sport, hometeam, awayteam, starathlete1, starathlete2, stadium, city, gametime, seat, emailaddress, phonenumber, ticketcost) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($sport, $hometeam, $awayteam, $starathlete1, $starathlete2, $stadium, $city, $gametime, $seat, $emailaddress, $phonenumber, $ticketcost))) {
        header('Location: http://localhost/website/Posting/Sport/ShowSportSellerID.php');
    } else {
        echo "error";
    }
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>




