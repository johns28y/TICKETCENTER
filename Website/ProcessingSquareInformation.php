 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (!empty($_POST)) {
    $EmailAddress = $_POST['EmailAddress'];//1
    $TicketCost = $_POST['TicketCost'];//2
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $insert = "INSERT INTO SquareCashInformation (EmailAddress, TicketCost) VALUES (?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($EmailAddress, $TicketCost))) {
        header('Location: http://localhost/website/SquareCashComplete.php');
    } else {
        print_r( $connection->errorInfo());
    }
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>