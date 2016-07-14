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
              Post a Sport Ticket<br>
            </h1>
            <form action = ""> 
            <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
            </form>
            <form action = "NewSportPosts.php" method = "post">
                sport: <br> 
                <input type="text" name="sport">
                <br>
                <br>
                hometeam:
                <br> 
                <input type = "text" name = "hometeam"> 
                <br>
                <br>
                awayteam: 
                <br> 
                <input type = "text" name = "awayteam">
                <br>
                <br> 
                starathlete1: 
                <br>
                <input type = "text" name = "starathlete1"> 
                <br>
                <br> 
                starathlete2: 
                <br> 
                <input type = "text" name = "starathlete2">
                <br>
                <br>
                stadium: 
                <br>
                <input type = "text" name = "stadium"> 
                <br> 
                <br> 
                city: 
                <br> 
                <input type = "text" name = "city"> 
                <br>
                <br>
                gametime: 
                <br> 
                <input type = "text" name = "gametime"> 
                <br> 
                <br> 
                seat: 
                <br>  
                <input type = "text" name = "seat"> 
                <br> 
                <br>
                <input type="submit" >
            </form>
        </div>  
    </body> 
</html>
