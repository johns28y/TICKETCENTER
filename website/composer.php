<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
if (!$connection) {
    die('Connection failed' + mysql_error());
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
                Add new ticket
            </h1>
            <a href = "index.html"> 
                Visit Home
            </a> 
            <form action = "new-post.php" method = "post">
                Title: <br> 
                <input type="text" name="title">
                <br>
                <br>
                Text:
                <br> 
                <textarea name = "text" rows="30" cols="50"></textarea>
                <br>
                <br>
                <input type="submit" >
            </form>
        </div>  
    </body> 
</html>
