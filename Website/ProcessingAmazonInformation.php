 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (!empty($_POST)) {
    $PhoneNumber = $_POST['PhoneNumber'];//2
    $connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );
    $insert = "INSERT INTO AmazonCollegeCampusInformation (PhoneNumber) VALUES (?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($PhoneNumber))) {
        header('Location: http://localhost/website/AmazonCollegeCampusComplete.php');
    } else {
        print_r( $connection->errorInfo());
    }
} else {
    echo "nothing is posted";
   
}
$connection = NULL; 
?>