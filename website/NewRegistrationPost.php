<?php
$dsn = 'mysql:host=127.0.0.1; dbname=TICKETCENTER';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
if (!$connection) {
    die('Connection failed' + mysql_error());
}


define('Title', 'Register');
include('Header.html');

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$problem = FALSE; 
}
	if(!empty($_POST)){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$emailaddress = $_POST['emailaddress'];
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		/*let's try strip slashes */
		$firstname = stripslashes($firstname);
		$lastname = stripslashes($lastname);
		$emailaddress = stripslashes($emailaddress);
		$phonenumber = stripslashes($phonenumber);
		$confirmpassword = stripslashes($confirmpassword);
	}
		if($password != $confirmpassword){
		echo ("Error...Passwords do not match");
		$problem = TRUE;
		}else{
			echo "Password Ok";
		}
	if(!$problem){ 
	$insert = "INSERT INTO User(firstname, lastname, emailaddress, phonenumber, password) VALUES (?,?,?,?,?)";
    $prepared = $connection->prepare($insert);
    if($prepared->execute(array($firstname, $lastname, $emailaddress, $phonenumber, $password))) 
	print '<p> You are registered! </p>';
	
}

?>


