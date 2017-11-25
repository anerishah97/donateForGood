<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'dfg');
define('DB_USER','root');
define('DB_PASSWORD','');

$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 

session_start();

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']))
{

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname']; 
    $username = $_POST['email']; 
    $password = $_POST['password']; 

    $_SESSION['username'] = $username;


  $password_hash = password_hash($password, PASSWORD_BCRYPT);

    $q = "Select count(*) from users where email = '".$username."'";

     $d = mysqli_query($con,$q);
$row=mysqli_fetch_array($d);
$c = $row[0];
     if($c >0)
     {
$message = "";
        echo '<script type="text/javascript">'; 
        echo 'alert("This email id is already registered");'; 
        echo 'window.location.href = "index.php";';
        echo '</script>';   
    }
     else
    {
     	 $query = "INSERT INTO users (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$username','$password_hash')";
    	$data = mysqli_query ($con, $query)or die(mysqli_connect_error()); 	
    	header("location: indexuser.php"); /* Redirect browser */


     }
}
mysqli_close($conn);

?>