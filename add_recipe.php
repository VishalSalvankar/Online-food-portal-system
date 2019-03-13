<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="js/cufon-yui.js" type="text/javascript"></script>
    <script src="js/cufon-replace.js" type="text/javascript"></script> 
    <script src="js/Dynalight_400.font.js" type="text/javascript"></script>
    <script src="js/FF-cash.js" type="text/javascript"></script>  
    <script type="text/javascript">
        function myFunction() {
        var a, b, c, d, e, f, g;

        // Get the value of the input field with id="numb"
        a = document.getElementById("name1").value;
        b = document.getElementById("sp1").value;
        c = document.getElementById("cat1").value;
        d = document.getElementById("tr1").value;
        e = document.getElementById("cal1").value;
        f = document.getElementById("ingr1").value;
        g = document.getElementById("proc1").value;
        
        if (a=="") 
        {
            alert("Input not valid");
        } 
        if (b=="" || (b<0 && b>5)) 
        {
            alert("Rating must be between 0 and 5"); 
        }
        if (d=="" || d<=0)
        {
            alert("Time cannot be less than 0");
        }
        if (e=="" || e<=0)
        {
            alert("Calories cannot be 0");
        }
        if (f=="")
        {
            alert("Please specify the ingredients");
        }
        if (g=="")
        {
            alert("Please specify the procedure");
        }
        
    }
    </script>
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
              <article class="col-2">
           	    <h3 class="p1">Add Recipes</h3>
                   <form id="contact-form" name="reg" method="post" enctype="multipart/form-data" action="addrecipedb.php" onsubmit="myFunction()">                    
                        
			<table border="0">
			  	<tr>
				
                    <td>Name</td><td><input name="name" id="name1" type="text" required=""></td>
		    <td><p id="dem" style="color: red"></p><br/><br/></td>
                 
				</tr>
	 
				 <tr>
                 
                    <td>Spicyness Rating</td>
                    <td><input name="sp" id="sp1" type="number" required="" min="1" max="5" ></td>
					<td><p id="dem1" style="color: red"></p><br/><br/></td>
                  
				</tr>
                <tr>
                 
                    <td>Category</td>
                    <td><input name="cat" id="cat1" type="text" required=""></td>
					<td><p id="dem2" style="color: red"></p><br/><br/></td>
                  
				</tr>
                <tr>
                 
                    <td>Time Required</td>
                    <td><input name="tr" id="tr1" type="number" required="" min="5"></td>
                    <td><p id="dem3" style="color: red"></p><br/><br/></td>
                  
                </tr>
                <tr>
                 
                    <td>Calories</td><td><input name="cal" id="cal1" type="number" required="" min="50"></td>
					<td><p id="dem4" style="color: red"></p><br/><br/></td>
                  
				</tr>
 
                <tr>
                 
                    <td>Ingredients</td><td><textarea name="ingr" id="ingr1" rows="100" cols="100" required=""></textarea></td>
                    <td><p id="dem5" style="color: red"></p><br/><br/></td>
                  
                </tr>               
                <br><br>
                <tr>
                 
                    <td><br>Procedure</td><td><br><textarea name="proc" id="proc1" rows="100" cols="100" required=""></textarea></td>
                    <td><p id="dem6" style="color: red"></p><br/><br/></td>
                  
                </tr>

                <tr>
                 
                    <td><br>Select Image to Upload</td><td><br><input name="file" type="file" required=""></textarea></td>
                    <td><p id="dem6" style="color: red"></p><br/><br/></td>
                  
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