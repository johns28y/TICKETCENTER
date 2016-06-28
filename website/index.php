<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}

$sql = 'SELECT body, id FROM posts where id = (select max(id) from posts)';

$result = $connection->query($sql);
$data = $result->fetchAll();
$body = $data[0]['body'];
$id = $data[0]['id'];
echo "$body, $id";

/*
foreach($connection->query($sql) as $row){
    print $row['body'] . "\t";
}
*/
    
?>