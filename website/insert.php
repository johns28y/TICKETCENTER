<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
}
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $body = $_POST['text'];
    $timestamp = date('Y-m-d H:i:s');
    mysql_query("INSERT INTO users (title, body, date) VALUES ('$title','$body','$timestamp')"); 
    }
$connection = NULL; 
?>

<!DOCTYPE html> 
<html> 
    <head>
        <link href = 'styles.css' rel = 'stylesheet' type = "text/css" /> 
        <title> 
            Ticket Center
        </title>
    </head> 
    <body> 
        <div class='ticket-list'>
            <h1> 
                Add New Post 
            </h1>
            <a href = "index.html"> 
                Visit Home
            </a> 
            <form name="htmlForm" id="htmlForm"  method="POST" action="/Users/tyreking/bulletinboard/website/fetch.php"> 
                Title: <br> 
                <input type="text" name="title">
                <br>
                <br>
                Text:
                <br> 
                <textarea rows="30" cols="50"></textarea>
                <br>
                <br>
                <input type="submit" value="submit">
            </form>
        </div>  
    </body> 
</html>



