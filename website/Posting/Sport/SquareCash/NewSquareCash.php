 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (!empty($_POST)) {
    $emailaddress = $_POST['emailaddress'];//1
    $ticketcost = $_POST['ticketcost'];//2
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $insert = "INSERT INTO SquareCash(emailaddress, ticketcost) VALUES (?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($emailaddress, $ticketcost))) {
        header('Location: http://localhost/website/posting/sport/squarecash/squarecashthankyou.php');
    } else {
        print_r( $connection->errorInfo());
    }
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>