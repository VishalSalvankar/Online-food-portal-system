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
                    <div class="slider-wrapper">
                        <div class="slider">
                            <ul class="items">
                                <li>
                                    <img src="images/slider-img1.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img2.jpg" alt="" />
                                </li>
                                <li>
                                    <img src="images/slider-img3.jpg" alt="" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
	<!--==============================content================================-->
    <section id="content"><div class="ic"></div>
        <div class="main">
            <div class="wrapper img-indent-bot">
                <article class="col-1">
                    <?php 
                        if(isset($_SESSION['fName']))
                    { 
                       echo("<input type=\"button\" value=\" Login User \"onClick=\"location.href='index.php'\" class=\"button-1\" >");
                    }
                    else
                    {
                       echo("<input type=\"button\" value=\" Login User \"onClick=\"location.href='login.html'\" class=\"button-1\" >") ;   
                    } ?>  
                </article>
                <article class="col-1">
                	<input type="button" value=" Logout User "onClick="location.href='logout.php'" class="button-1">
                </article>
                <article class="col-2">
                    <?php 
                        if(isset($_SESSION['fName']))
                    { 
                       echo("<input type=\"button\" value=\" Sign Up \"onClick=\"location.href='index.php'\" class=\"button-1\" >");
                    }
                    else
                    {
                       echo("<input type=\"button\" value=\" Sign Up \"onClick=\"location.href='registration_form.html'\" class=\"button-1\" >") ;   
                    }  ?> 
                </article><br><br><br>
                <article class="col-2">
                    <input type="button" value=" Menu "onClick="location.href='menu.php'" class="button-1" >
                </article>
                <article class="col-2">
                    <?php 
                        if(isset($_SESSION['fName']))
                    { 
                       echo("<input type=\"button\" value=\" Add Recipes \"onClick=\"location.href='add_recipe.php'\" class=\"button-1\" >");
                    }
                    else
                    {
                       echo("<input type=\"button\" value=\" Add Recipes \"onClick=\"location.href='index.php'\" class=\"button-1\" >") ;   
                    }   
                 ?>
                     
                </article>
                <article class="col-2">
                    <?php 
                        if(isset($_SESSION['fName']))
                    { 
                       echo("<input type=\"button\" value=\" Admin Login \"onClick=\"location.href='index.php'\" class=\"button-1\" >");
                    }
                    else
                    {
                       echo("<input type=\"button\" value=\" Admin Login \"onClick=\"location.href='admin_logins.php'\" class=\"button-1\" >") ;   
                    }   
                    ?>
                </article>
            </div>
            <div class="wrapper">
            	<article class="column-1">
                	<div class="indent-left">
                        <div class="maxheight indent-bot">
                            
                        </div>
                       
                    </div>                </article>
                <article class="column-2">
                	<article class="column-2">
                	<div class="maxheight indent-bot">
                        <h3 class="p1">About FudLa-Inn</h3>
                        <h6 class="p2">We provide service at your laptops. Sit at home and prepare your own favouritr dish. So why wait? Browse through the menu, select the item of your choice and learn them and enjoy cooking various dishes. Happy munching food!</h6>
                        <p class="p2">Users can register on this site and view the recipes they like. Users can also post their own recipe. Within the blink of an eye, you would be staring at your delicious self made recipe. </p>                        
                    </div>
                    </article>
            </div>
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
