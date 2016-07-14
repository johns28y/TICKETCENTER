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
        <form action = ""> 
         <input type = "button" value = "Concert" onclick = "window.location.href = 'concertcomposer.php';"/>
         <input type = "button" value = "Sport"   onclick = "window.location.href = 'sportcomposer.php';"/>
        </form>
    
        
        
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
    
    

