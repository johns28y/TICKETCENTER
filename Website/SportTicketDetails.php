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
            <h1>
            Ticket Center
            </h1>
         <form action = ""> 
         <input type = "button" value = "home" onclick = "window.location.href = 'home.php';"/>
         </form>
        </div>
<?php
$dsn = 'mysql:host=127.0.0.1; dbname=bulletinboard';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO($dsn, $username, $password); 
if(!$connection){
    die('Connection failed' + mysql_error());
}
          
  $getId=$_GET["id"];
  $sql = 'SELECT * FROM Sportposts where id='.$getId; 
foreach($connection->query($sql) as $row){
    $starathlete1 = $row['starathlete1'];
    $starathlete2 = $row['starathlete2'];
    $stadium = $row['stadium'];
    $city = $row['city'];
    $gametime = $row['gametime'];
    $seat = $row['seat'];
    $awayteam = $row['awayteam'];
    $hometeam = $row['hometeam'];
    //$date = $row['date']."\n";
    echo '<div class = "ticket">';
    echo $awayteam . '<br>';
    echo $hometeam . '<br>';
    echo $starathlete1 . '<br>';
    echo $starathlete2 . '<br>';
    echo $stadium . '<br>';
    echo $city . '<br>';
    echo $gametime . '<br>';
    echo $seat . '<br>';
    echo '</div>';
    
}
      
?>
        
   </body>
</html>

    