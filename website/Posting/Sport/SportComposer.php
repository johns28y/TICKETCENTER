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
              Post Sport Ticket<br>
            </h1>
            <form action = "/posting/sport/NewSportPosts.php"> 
            <input type = "button" value = "HOME" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
            </form>
            <form action = "NewSportPosts.php" method = "post">
                SPORT: <br> 
                <input type="text" name="sport">
                <br>
                <br>
                HOMETEAM:
                <br> 
                <input type = "text" name = "hometeam"> 
                <br>
                <br>
                AWAYTEAM: 
                <br> 
                <input type = "text" name = "awayteam">
                <br>
                <br> 
                STARATHLETE1: 
                <br>
                <input type = "text" name = "starathlete1"> 
                <br>
                <br> 
                STARATHLETE2: 
                <br> 
                <input type = "text" name = "starathlete2">
                <br>
                <br>
                STADIUM: 
                <br>
                <input type = "text" name = "stadium"> 
                <br> 
                <br> 
                CITY: 
                <br> 
                <input type = "text" name = "city"> 
                <br>
                <br>
                GAMETIME: 
                <br> 
                <input type = "text" name = "gametime"> 
                <br> 
                <br> 
                SEAT: 
                <br>  
                <input type = "text" name = "seat"> 
                <br> 
                <br>
                <br>
                Email Address:
                <br>
                <input type = "text" name = "emailaddress">
                <br>
                <br>
                Phone Number:
                <br>
                <input type = "text" name = "phonenumber">
                <br>
                <br>
                Ticket Cost: 
                <br>
                <input type = "text" name = "ticketcost">
                <br>
                <br>
                <input type="submit" value = "SUBMIT SPORT TICKET" >
            </form>
        </div>  
    </body> 
</html>
