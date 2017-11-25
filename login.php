<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'dfg');
define('DB_USER','root');
define('DB_PASSWORD','');
session_start();
$con = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_connect_error());
$db = mysqli_select_db($con, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_connect_error()); 

$username = $_POST['email'];
$password = $_POST['password']; 

$_SESSION['username'] = $username;
 


    $q = "Select count(*) from users where email = '".$username."'";
    $d = mysqli_query($con,$q);
    $row=mysqli_fetch_array($d);
	$c = $row[0];
	if($c>0)
     {
     		$q1 = "Select password from users where email = '".$username."'";
     		$d1 = mysqli_query($con,$q1);
     		$r1 = mysqli_fetch_array($d1);
     		$c1 = $r1[0];
     		if(password_verify($password, $c1))
     		{

 				header("location: indexuser.php"); /* Redirect browser */;    			
     		}
 		 //   
    }
    else
    {
    	
  		
  		$message = "Invalid userid or password";
		echo '<script type="text/javascript">'; 
		echo 'alert("Uh-oh. Invalid username or password");'; 
		echo 'window.location.href = "index.php";';
		echo '</script>';   		
    }


?>