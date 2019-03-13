<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>
    <script src="js/tms-0.3.js" type="text/javascript"></script>
    <script src="js/tms_presets.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
	
</head>
<body id="page1">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Fudla<span></span></a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a class="active" href="index.php">Home</a></li>
                            <li><a href="tos.php">Terms Of Service</a></li>
                            <li><a href="privacy.php">Privacy</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li style="color: white; size: 25px"><?php
                                if(isset($_SESSION['fName']))
                                {
                                    echo "Welcome " .$_SESSION['fName'];  
                                } ?> </li> 
                        </ul>
                        
                    </nav>
                </div>
            </div>
            
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Cooking  <span>Recipe Portal</span></h2>
                </div>
            </div>
        </div>
    </header>
   
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
              <article class="col-2">
                <h3 class="p1">Delete Recipe</h3>
                   <form id="contact-form" name="reg" method="post" enctype="multipart/form-data">                    
                        
            <table border="0">
                <tr>
                
                    <td>Name</td><td><input name="name" id="name1" type="text" required=""></td>
            <td><p id="dem" style="color: red"></p><br/><br/></td>
                 
                </tr>
                <tr>
                <td><br><br><input type="submit" value="Send" name="submit" class="button-2"/></td>
                 <td><br><br><input type="reset" value="Clear" class="button-2" onclick='history.go()'/></td>
                </tr>
            </table>
        </form>
    </article>
</div>
</div>
</section>

<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(isset($_POST['submit'])){
  $bname = $_POST['name'];
  


$sql="DELETE FROM recipes WHERE name='$bname'";

if($conn->query($sql)==TRUE)
{
  echo "Recipe deleted successfully.";
  header('location: admin.php');
}
else
{
    echo "Recipe not available on the portal, Please check!!!";
    header('location: admin.php');
}

}
?>

   <footer>
        <div class="main">
            <div class="aligncenter">
                
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.slider')._TMS({
                duration:1000,
                easing:'easeOutQuint',
                preset:'slideDown',
                slideshow:7000,
                banners:false,
                pauseOnHover:true,
                pagination:true,
                pagNums:false
            });
        });
    </script>
</body>
</html>
