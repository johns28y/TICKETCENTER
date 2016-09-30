 <?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());

$sql = 'SELECT venue, performer, city, id FROM Concert'; 
$data = '['. PHP_EOL;
$i = 0;
$numItems = count($connection->query($sql));

foreach($connection->query($sql) as $row){
    $venue = $row['venue'];
    $performer = $row['performer'];
    $city = $row['city'] 
    $id = $row['id'];
    
    $data .= "{". PHP_EOL; //PHP_EOL IS THE ALTERNATIVE TO <BR> 
    $data .=  '"": "'.  $venue . ','. PHP_EOL;
    $data .=  '"": "'.  $performer . ','. PHP_EOL;
    $data .=  '"": "'.  $city . PHP_EOL;
    $data .=  '"": "'.  $id . PHP_EOL;

    $data .=  '}'. PHP_EOL;
    if($i <= $numItems-1) $data .= ','; 
    $i++;
}


$data .= ']';

echo $data;

file_put_contents('list.json', $data);

?>