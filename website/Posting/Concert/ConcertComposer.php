
<!DOCTYPE html> 
<html> 
    <head> 
    <link href = "../../styles.css" rel = 'stylesheet' type = "text/css" >
        <title> 
        Ticket Center
        </title>
    </head>
    <body> 
        <div class = 'ticket-list'>
            <h1> 
                POST CONCERT TICKET<br> 
            </h1>
          <form action = ""> 
         <input type = "button" value = "HOME" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
          </form>
        <form action = "NewConcertPosts.php" method = "post">
            Venue: <br>
            <input type = "text" name = "venue">
            <br> 
            <br>
            Performer: 
            <br>
            <input type = "text" name = "performer">
            <br>
            <br> 
            City:
            <br>
            <input type = "text" name = "city">
            <br>
            <br>
            Showtime:
            <br>
            <input type = "text" name = "showtime">
            <br>
            <br>
            Seat:
            <br>
            <input type = "text" name = "seat">
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
            <input type = "submit" value = "Submit Concert Ticket" />
        </form>
        </div>
    </body>
</html>
