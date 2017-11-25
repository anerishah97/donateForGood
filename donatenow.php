<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'dfg');
define('DB_USER','root');
define('DB_PASSWORD','');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 


session_start();

	
//$_SESSION['email'] = $email;
//$_SESSION['firstname'] = $email;
$email = $_SESSION['username'];	
$userId = $_SESSION['userId'];
$category = $_POST['category']; 
$description = $_POST['description']; 
$quantity = $_POST['quantity']; 
$pickUpAddress = $_POST['address']; 
$query = "INSERT INTO donations (userId, itemName, description, quantity) VALUES ($userId,'$category','$description',$quantity)";

$data = mysqli_query ($con,$query);

	
	if($data) 
	{
	
	$to      = $email;
	$subject = 'Thank You For Your Contribution!';
	$message = 'We will be contacting you soon regarding the donation of products. Thank you for taking efforts to bring smiles to the lesser privileged';
	$headers = 'From: donateforgood123@gmail.com' . "\r\n" .
    	'Reply-To: webmaster@example.com' . "\r\n" .
    	'X-Mailer: PHP/' . phpversion();

		$mailsent = mail($to, $subject, $message, $headers);
 
	} 
	header("location: indexuser.php");
 
 

