$conn = new PDO ($dsn, $username, $password ) ;
if (!$connection) {
    die('Connection failed'. mysql_error());
}

$sql = 'SELECT title, body, date FROM posts';
$fetch = mysql_query($sql, $connection); 
if (!$fetch) {
    die('Query failed'. mysql_error());
}

while($row = mysql_fetch_assoc($fetch) {
    echo "TESTING";
}

mysql_free_result($fetch);
mysql_close($connection);


