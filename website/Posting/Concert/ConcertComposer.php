
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
                CREATE EVENT<br> 
            </h1>
          <form action = ""> 
         <input type = "button" value = "HOME" onclick = "window.location.href = '/website/TicketCenterHome.php';"/>
          </form>
        <form action = "NewConcertPosts.php" method = "post">
            concertname: <br>
            <input type = "text" name = "concertname">
            <br> 
            <br>
            address: 
            <br>
            <input type = "text" name = "address">
            <br>
            <br> 
            groupname:
            <br>
            <input type = "text" name = "groupname">
            <br>
            <br>
            time: 
            <br> 
            <input type = "text" name = "time">
            <br>
            <br>
            description:
            <br>
            <input type = "text" name = "description">
            <br>
            <br>
            <input type = "submit" value = "PROCESS EVENT" />
        </form>
        </div>
    </body>
</html>
