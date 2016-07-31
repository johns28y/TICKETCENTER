<!DOCTYPE html>
<html> 
    <head>
    <link href = 'styles.css' rel = 'stylesheet' type = "text/css"/>
        <title>
           Ticket Center
        </title>
    </head>
    <body>
        <div class = 'ticket-list'>
        <img src = "square.png" height = "100" width = "100">
        <button onclick = "myFunction()"> What is Square Cash?</button>
        <p id = "demo"> </p>
        <script>
        function myFunction(){
            alert("When your ticket is purchased. Ticket Center uses Square Cash to move the cash from the buyers' bank account and send you an email with the web link to transfer to your bank account.");
        }
        </script>
        </div>
        <form action = "ProcessingSquareInformation.php" method = "post">
        <br>
        <br>
        EmailAddress: 
        <br>
        <input type = "text" name = "EmailAddress">
        <br>
        <br>
        TicketCost: 
        <br>
        <input type = "type" name = "TicketCost">
        <br>
        <br>
        <input type = "submit" value = 'process Square cash'/>
        </form>
        </div>
    </body>
</html>
