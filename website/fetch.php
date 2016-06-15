$connection = mysql_connect("localhost","root","", "bulletinboard");
if (!$connection) {
    die('Connection failed'. mysql_error());
}

$sql = 'SELECT posts_title, posts_body, submission_date FROM posts';
$fetch = mysql_query($sql, $connection); 
if (!$fetch) {
    die('Query failed'. mysql_error());
}

while($row = mysql_fetch_assoc($fetch) {
    echo "TESTING";
}

mysql_free_result($fetch);
mysql_close($connection);