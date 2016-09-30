<!DOCTYPE html> 
<html> 
    <head>
        <link href = "../../styles.css" rel = 'stylesheet' type = "text/css" /> 
        <title> 
            Ticket Center
        </title>
    </head> 
    <body> 
        <div class='ticket-list'>
            <h1> 
              CREATE EVENT<br>
            </h1>
            <form action = "/posting/sport/NewSportPosts.php"> 
            <input type = "button" value = "HOME" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
            </form>
            <form action = "NewSportPosts.php" method = "post">
                eventname: <br> 
                <input type="text" name="eventname">
                <br>
                <br>
                address:
                <br> 
                <input type = "text" name = "address"> 
                <br>
                <br>
                description: 
                <br> 
                <input type = "text" name = "description">
                <br>
                <br> 
                time: 
                <br>
                <input type = "text" name = "time"> 
                <br>
                <br> 
                <input type="submit" value = "PROCESS EVENT" >
            </form>
        </div>  
    </body> 
</html>
