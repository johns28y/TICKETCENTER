$connection = mysql_connect("localhost","root","");
if (!$connection) {
    die('Connection failed', mysql_error());
}

$sql = 'SELECT posts_title, posts_body, submission_date FROM posts';
mysql_select_db("bulletinboard");
$fetch = mysql_query($sql, $connection);
if (!$fetch) {
    die('Query failed', mysql_error());
}

while($row = mysql_fetch_assoc($fetch) {

}

mysql_free_result($fetch);
mysql_close($connection);