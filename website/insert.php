<?php
$dsn = 'mysql:host=localhost; dbname=bulletinboard';
$username = 'TyreKing';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 




if (!$connection) {
    die('Connection failed', mysql_error());
}
if(isset $_POST['submit']) {
    $title = $_POST['title'];
    $body = $_POST['text'];
    $timestamp = date('Y-m-d H:i:s');
    $query = mysql_query("INSERT INTO posts (title, body, date)") VALUES ( ($title, $body, $timestamp)")
    }

mysql_close($connection);

?>

