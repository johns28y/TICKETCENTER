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
        </div>
        <div data-role = "main" class = "ui-content"> 
        <p>This is the section for us to take care of your ticket cancellation</p>
        </div>
        
        <div data-role = "page" data-dialog = "true" id = "pagetwo"></div>
          <div data-role = "header"> 
             <h1> Identify your user status</h1>
          </div>
        
        <div data-role = "main" class = "ui-content"> </div>
        <p>We understand that you wish to cancel. Please tell us more information about yourself. Tap if you are the user that purchased or sold the ticket. </p>
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




