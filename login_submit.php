<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) 
{
    die("Connection failed: " . $con->connect_error);
}
mysqli_select_db($con,'recipe');

$email=$_POST['emails'];
$password=$_POST['passwords'];

$sql = "SELECT id, email, firstname FROM customer where email='$email' AND password = '$password'";

$result = $con->query($sql);


if ($result->num_rows > 0) { 

	session_start();		
	$_SESSION['email'] = $email;
	while($row = $result->fetch_assoc()) 
   	{
        $_SESSION['user_id']=$row["id"] ;
		$_SESSION['fName']=$row["firstname"];		

    }

	header('location: index.php');
		
	} 
else 
{
  	header('location: login.html');	
}


?>

