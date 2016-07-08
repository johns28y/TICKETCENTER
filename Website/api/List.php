<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
$sql = 'SELECT id, title, body, date FROM posts'; 
$data = '[';
$i = 0;
$numItems = count($connection->query($sql));
foreach($connection->query($sql) as $row){
    $title = $row['title'];
    $body = $row['body'];
    //$date = $row['date'];
    $id = $row['id'];
    $data .= '{';
    $data .=  '"id": "'.  $id . ',';
    $data .=  '"title": "'.  $title . ',';
    $data .=  '"body": "'.  $body . ',';
   // $data .=  '"date": "'.  $date . '';
     $data .=  '}';
     if($i <= $numItems+1) $data .= ','; 
    $i++;
}

$data .= ']';
echo $data;
file_put_contents('list.json', $data);
?>
