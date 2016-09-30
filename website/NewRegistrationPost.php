<?php
$dsn = 'mysql:host=127.0.0.1; dbname=ticketcenter';
$username = 'root';
$password = 'GoogleScholar1'; 
$connection = new PDO ($dsn, $username, $password); 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
if (!$connection) {
    die('Connection failed' + mysql_error());
}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$problem = FALSE; 
}
	if(!empty($_POST)){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];
		/*let's try strip slashes 
		$firstname = stripslashes($firstname);
		$lastname = stripslashes($lastname);
		$email = stripslashes($email);
		$phonenumber = stripslashes($phonenumber);
		$password = stripslashes[password'];
		$confirmpassword = stripslashes($confirmpassword);
		*/

		$passwordsalt = openssl_random_pseudo_bytes(32); 
       
        $passwordhash = hash('sha256', $password.$passwordsalt);

		if($password != $confirmpassword){
		echo ("Error...Passwords do not match");
		$problem = TRUE;
		}else{
			echo "Password Ok";
		}
		$phonenumber = preg_replace('/\D+/', '', $phonenumber);
		echo $phonenumber;
		

		$insert = "INSERT INTO USER(email, phonenumber, passwordhash, passwordsalt, firstname, lastname) VALUES (?,?,?,?,?,?)"; 
		$prepared = $connection->prepare($insert);
		if($prepared->execute(array($email, $phonenumber, $passwordhash, $passwordsalt, $firstname, $lastname))){
			header('Location: http://localhost/website/RegistrationConfirmation.php'); 
		}else {
			echo "error";
		}
	} else {
		echo "nothing is posted";
	}
	$connection = NULL; 
	?>

	