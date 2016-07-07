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
            <h5>
            Ticket Center
            </h5>
            <a href = "home.php"> 
                Go Home<br>
            </a> 
        </div>
        
        <div class = "header">
            <h1> We understand that you wish to cancel. </h1>
        </div>
        
        <div class = "header"> 
           <h1> You have made it to the correct section to take care of your ticket cancellation. </h1>
        </div>
        
          <div class = "header"> 
             <h1> Tap if you are the user that purchased or sold the ticket. </h1>
          </div>
        
        <form action = ""> 
          <input type = "button" value = "Purchased"  onclick = "window.location.href ='ticketcancellationpurchased.php';"/>
          <input type = "button" value = "Sold"  onclick = "window.location.href ='ticketcancellationsold.php';"/>
        </form>    
    </body>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname = bulletinboard';
$username = 'root';
$password = 'GoogleScholar1';
$connection = new PDO($dsn, $username, $password);
if (!$connection) {
    die('Connection failed' + mysql_error());
}
?>
</html>




