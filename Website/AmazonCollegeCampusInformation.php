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
        <img src = "Amazonlogo.png" height = "100" width = "100" >
        <button onclick = "myFunction()"> What is Ticket Drop Off at Amazon?</button>
        <p id = "demo"> </p>
        <script>       
        function myFunction() {
           alert ("When your ticket is found. Ticket Center will call you with directions to drop the ticket off at Amazon @ Georgia Tech: 86th 5th NW Street. ");
        }
        </script>
        </div>
        <form action = "ProcessingAmazonInformation.php" method = "post">
        <br>
        <br>
        <br>
        <br>
        PhoneNumber: 
        <br>
        <input type = "type" name = "PhoneNumber">
        <br>
        <br>
        <input type = "submit" value = 'Process Amazon College Campus'/>
        </form>
        </div>
    </body>
</html>

                
    