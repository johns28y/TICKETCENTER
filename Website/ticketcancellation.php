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
            <form action = ""> 
            <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
    </form>
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
</html>




