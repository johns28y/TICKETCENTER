$connection = mysql_connect("localhost","root","", "bulletinboard");
if (!$connection) {
    die('Connection failed', mysql_error());
}
if(isset $_POST['submit']) {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $timestamp = date("Y-m-d h:i:sa");
    $query = mysql_query("insert into post(title,body,date) values ($title, $body, $timestamp)");
    }
mysql_close($connection);

