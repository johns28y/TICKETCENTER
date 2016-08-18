<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
$sql = 'SELECT sport, hometeam, awayteam, id FROM Concertposts'; 
$data = '['. PHP_EOL;
$i = 0;
$numItems = count($connection->query($sql));

foreach($connection->query($sql) as $row){
    $sport = $row['sport'];
    $hometeam = $row['hometeam'];
    $awayteam = $row['awayteam'] 
    $id = $row['id'];
    $data .= "{". PHP_EOL; //PHP_EOL IS THE ALTERNATIVE TO <BR> 
    $data .=  '"": "'.  $sport . ','. PHP_EOL;
    $data .=  '"hometeam": "'.  $hometeam . ','. PHP_EOL;
    $data .=  '"awayteam": "'.  $awayteam . PHP_EOL;
    $data .=  '"id: "'.  $id . PHP_EOL;

    $data .=  '}'. PHP_EOL;
    if($i <= $numItems-1) $data .= ','; 
    $i++;
}


$data .= ']';

echo $data;

file_put_contents('list.json', $data);

?>