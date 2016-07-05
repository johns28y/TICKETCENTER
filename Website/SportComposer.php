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
                Sell a Ticket<br>
            </h1>
            <a href = "home.php"> 
                Go Home<br>
            </a> 
            <form action = "NewPosts.php" method = "post">
                Sport: <br> 
                <input type="text" name="category">
                <br>
                <br>
                Teams, City:
                <br> 
                <input type = "text" name = "location"> 
                <br>
                <br>
                <input type="submit" >
            </form>
        </div>  
    </body> 
</html>
