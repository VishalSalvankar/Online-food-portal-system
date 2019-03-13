<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
	
</head>
<body id="page6">
	<!--==============================header=================================-->
    <header>
    	<div class="row-top">

        	<div class="main">
            
            	<div class="wrapper">
                	<h1><a href="index.html">Fudla</a></h1>
                    <nav>
                        <ul class="menu">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="menu.php">Menu</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><?php
                                if(isset($_SESSION['fName']))
                                {
                                    echo "Welcome " .$_SESSION['fName'];  
                                }
                                else
                                {
                                    echo "hello";
                                } ?></li>
                        </ul>
 
                    </nav>
                   
                </div>
            </div>
        </div>
        <div class="row-bot">
        	<div class="row-bot-bg">
            	<div class="main">
                	<h2>Online Cooking  <span>Portal System</span></h2>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content">
        <div class="main">
                <article class="col-1">
                 <input type="button" value=" Add Recipe " onClick="location.href='add_recipe.php'" class="button-1">
                </article>
                <article class="col-3">
                    <input type="button" value=" Delete Recipe "onClick="location.href='delete_recipe.php'" class="button-1" >
                </article><br><br><br>
                <article class="col-3">
                    <input type="button" value=" Logout "onClick="location.href='admin_logout.php'" class="button-1" >
                </article>
                
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="aligncenter">
            	
            </div>
        </div>
    </footer>
    <script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
