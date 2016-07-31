
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
            <h1> 
                Post a Concert Ticket<br> 
            </h1>
          <form action = ""> 
          <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
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
            <input type = "submit" />
        </form>
        </div>
    </body>
</html>