<!-- registration table is built NEED TO CHANGE  -->

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
              Registration<br>
            </h1>
            <form action = "NewRegistrationPost.php" method = "post">
                First Name: 
                <br> 
                <input type = "text" name = "firstname"> 
                <br>
                <br>
                Last Name: 
                <br> 
                <input type = "text" name = "lastname"> 
                <br> 
                <br> 
                Phone Number: 
                <br>  
                <input type = "text" name = "phonenumber">  
                <br> 
                <br>
                <br>
                Email Address:
                <br>
                <input type = "text" name = "emailaddress">
                <br>
                <br>
                Password:
                <br>
                <input type = "password" name = "password">
                <br>
                <br>
                Confirm Password: 
                <br>
                <input type = "password" name = "confirmpassword">
                <br>
                <br>
                <input type="submit" value = "register" >
            </form>
        </div>  
    </body> 
</html>

