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
session_start();
$name = $_POST['name'];
$sp = $_POST['sp'];
$tr = $_POST['tr'];
$cal = $_POST['cal'];
$cat = $_POST['cat'];
$proc = $_POST['proc'];
$ingr = $_POST['ingr'];

if (isset($_SESSION['fName'])) {
   $author = $_SESSION['fName'];
 } else {
   echo "Author unavailable";
 }
 

$statusMsg = '';

// File upload path
$targetDir = "recipes/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $con->query("INSERT into recipes(name,spicy,timereq,calories,category,proc,ingredients,img,author) VALUES ('$name','$sp','$tr','$cal','$cat','$proc','$ingr','$fileName','$author')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>