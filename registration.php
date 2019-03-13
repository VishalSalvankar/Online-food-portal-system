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

$firstname = $_POST["fnam"];
$lastname = $_POST["lnam"];
$address = $_POST["addr"];
$number = $_POST["mobile"];
$email = $_POST["emal"];
$password = $_POST["password"];

$duplicate = "SELECT email from customer where email='$email'";

$result = $con->query($duplicate);	

if ($result->num_rows > 0) 
{
    while($row = mysqli_fetch_assoc($result)) 
   {
        echo $row["email"];
   }
  header('location: registration_form.html?error_name=this email is already registered');
	
}
 else
{
$query = "INSERT INTO customer (firstname,lastname,address,pno,email,password) VALUES ('$firstname','$lastname','$address','$number','$email','$password')";
$query_result = $con->query($query);


$sql = "SELECT id, email, firstname FROM customer where email='$email' AND password = '$password'";


$result1 = $con->query($sql);


if ($result1->num_rows > 0) 
{ 

session_start();		
$_SESSION['email'] = $email;
while($row = $result1->fetch_assoc()) 
   {
        $_SESSION['user_id']=$row["id"] ;
		$_SESSION['fName']=$row["firstname"];		

    }

header('location: index.php');
		
} 
}
mysqli_close($con);
?>