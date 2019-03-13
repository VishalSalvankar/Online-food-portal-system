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

$email=$_POST['email'];
$password=$_POST['pass'];

$sql = "SELECT id, email, username FROM admin where email='$email' AND pwd = '$password'";

$result = $con->query($sql);


if ($result->num_rows > 0) { 

	session_start();		
	$_SESSION['email'] = $email;
	while($row = $result->fetch_assoc()) 
   	{
        $_SESSION['user_id']=$row["id"] ;
		$_SESSION['fName']=$row["username"];		

    }

	header('location: admin.php');
		
	} 
else 
{
  	header('location: admin_logins.php');	
}


?>

