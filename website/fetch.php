<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO ($dsn, $username, $password);
if (!$connection) {
    die('Connection failed:' + mysql_error());
}
$sql = 'SELECT title, body, date FROM posts';
$fetch = mysql_query($sql, $connection); 
/*problem 1:
This file does not run in browser. 
Get it running
*/
/* problem 2:
Go to the PDO methods
*/
/*problem 3:
write the HTML inside of this file.
*/

if (!$fetch) {
    die('Query failed:' + mysql_error());
}

while($row = mysql_fetch_assoc($fetch)) {
    echo $row["title"];
    echo $row["body"];
    echo $row["date"];
}//this while loop is pending a rewrite of the object-oriented methods in PHP.

mysql_free_result($fetch);
mysql_close($connection);

?>

