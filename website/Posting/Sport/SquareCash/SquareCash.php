
<!DOCTYPE html>
<html> 
    <head>
    <link href = "styles.css" rel = 'stylesheet' type = "text/css"/>
        <title>
            Ticket Center
        </title>
    </head>
    <body>
        <div class = 'ticket-list'>
        <img src = "SquareCash.png" height = "100" width = "100">
        <button onclick = "myFunction()"> What is Square Cash?</button>
        <p id = "demo"> </p>
        <script>
        function myFunction(){
            alert("When your ticket is purchased. Square Cash moves cash from the buyers' bank account to your bank account through an automatic email with a bank account transfer web link inserted.");
        }
        </script>
        </div>
        <form action = "newsquarecash.php" method = "post">
        <br>
        <br>
        EmailAddress: 
        <br>
        <input type = "text" name = "emailaddress">
        <br>
        <br>
        TicketCost: 
        <br>
        <input type = "type" name = "ticketcost">
        <br>
        <br>
        <input type = "submit" value = 'process Square cash'/>
        </form>
        </div>
    </body>
</html>