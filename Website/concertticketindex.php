<!DOCTYPE HTML>
<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href = "styles.css">
        <title>
        Ticket Center
        </title>
    </head>
    <body>
        <div class = "ticket-list">
           <h1>
           Ticket Center  
           </h1>
     <form action = ""> 
         <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
    </form>
     </div>
    
    
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
?> 
    </body>
</html>
    
    