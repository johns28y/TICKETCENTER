<?php
$dsn = 'mysql:host=localhost; dbname=bulletinboard';
$username = 'TyreKing';
$password = 'GoogleScholar1';

$connection = new PDO ($bulletinboard, $TyreKing,"GoogleScholar1");

if (!$connection) {
    die('Connection failed', mysql_error());
}

$sql = 'SELECT title, body, date FROM posts';

$fetch = mysql_query($sql, $connection); 
if (!$fetch) {
    die('Query failed', mysql_error());
}

while($row = mysql_fetch_assoc($fetch)) {
    echo $row["title"];
    echo $row["body"];
    echo $row["date"];
}

mysql_free_result($fetch);
mysql_close($connection);

?>

