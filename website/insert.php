$connection = mysql_connect("localhost","root","");
if (!$connection) {
    die('Connection failed', mysql_error());
}
$db = mysql_select_db("bulletinboard", $connection);
if(isset $_POST['submit']) {
    $title = $_POST['title'];
    $message = $_POST['message'];
    $timestamp = date("Y-m-d h:i:sa");
    $query = mysql_query("insert into post(posts_title,posts_body,submission_date) values ($title, $message, $timestamp)");
    }
mysql_close($connection);