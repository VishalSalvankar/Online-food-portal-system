<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script src="js/jquery.equalheights.js" type="text/javascript"></script>    
    <script src="js/jquery.bxSlider.js" type="text/javascript"></script> 
    <script type="text/javascript">
		$(document).ready(function() {
			$('#slider').bxSlider({
				pager: true,
				controls: false,
				moveSlideQty: 1,
				displaySlideQty: 3
			});
		}); 
	</script>
	
</head>

<body id="page2">
	<!--==============================header=================================-->
    
    <header>
    	<div class="row-top">
        	<div class="main">
            	<div class="wrapper">
                	<h1><a href="index.html">Fudla</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#tos">Terms Of Service</a></li>
                            <li><a href="#privacy">Privacy</a></li>
                            <li><a href="contact.html">Contact</a></li>
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
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper">
            

<table>
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

     $name=$_POST["gsearch"];
     $sql= "select * from recipes where name = '$name' and category = 'Arabian'";
     $result=mysqli_query($con,$sql);
     if($result-> num_rows > 0)
     { 
      $row = mysqli_fetch_assoc($result);
      $name = $row["name"];
      $spicy = $row["spicy"];
      $time = $row["timereq"];
      $calories = $row["calories"];
      $category = $row["category"];
      $proc = $row["proc"];
      $ingr = $row["ingredients"];
      $imageURL = 'recipes/'.$row["img"];
      

      echo "<tr>";
          echo "<td>";
            echo "<article class='col-1'>";
                echo "<div class='indent-left'>";
                      echo "<div class='img-indent-bot'>";
                          echo "<h3 class='prev-indent-bot'> $name </h3>";
                            echo "<div class='wrapper img-indent-bot'>";
                               
                                ?>
                                  <img src="<?php echo $imageURL; ?>" alt="" />
                              <?php 
                                  
                              echo "</div>";  
                               echo "<h5>Spicyness Rating: $spicy </h5><br>";
                               echo "<h5>Time Required: $time </h5><br>";
                               echo "<h5>Calories: $calories </h5><br>";
                               echo "<h5>Category: $category </h5><br>";
                               echo "<h5>Ingredients: $ingr </h5><br>";
                               echo "<h5>Prodecure: $proc </h5><br>";

                              
        echo "</table>";
      }
      else
      {
        echo "This is not available on the portal";
      }
      ?>