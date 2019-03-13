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
      function goToNewPage()
      {
        var url = document.getElementById('list').value;
        if(url != 'none') {
            window.location = url;
        }
      }

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
            

            <form action="hotels.php">
                Filter By<select name='myfield' onChange="window.document.location.href=this.options[this.selectedIndex].value;" value="GO">
                           <option value="http://localhost/food/indian.php">Indian</option>
                           <option value="http://localhost/food/french.php">French</option>
                           <option value="http://localhost/food/italian.php">Italian</option>
                           <option value="http://localhost/food/chinese.php">Chinese</option>
                           <option value="http://localhost/food/continental.php">Continental</option>
                           <option value="http://localhost/food/arabian.php">Arabian</option>  
                        </select>
            </form>
            <br>
            <section id="content"><div class="ic"></div>
            <div class="main">
            <div class="wrapper">
            <form action="resultmenu.php" method="post"  style="padding:10px 0px 0px 0px">  
            <li style="display: inline">
            <input type="search" name="bsearch" placeholder="Search"> <input type="submit"></li></form>


<table>
       <tr>
            <td>
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="indian.php" style="text-decoration: none"><h3 class="prev-indent-bot">Indian</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/indian.jpg" alt=""></figure>
                                   </div>
                                 </div>
                                    
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="chinese.php" style="text-decoration: none"><h3 class="prev-indent-bot">Chinese</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/chineese.jpg" alt=""></figure>
                            </div>
                           
                        </div>
                        
                </article>
                </td></tr>
                <tr>
            
                <td>
            	<article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="french.php" style="text-decoration: none"><h3 class="prev-indent-bot">French</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/French-Cuisine.jpg" alt=""></figure>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                	<div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="italian.php" style="text-decoration: none"><h3 class="prev-indent-bot">Italian</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/italian.jpg" alt=""></figure>-->
                            </div>
                           
                        </div>
                        
                </article>
                </td></tr>
                <tr><td>
              <article class="col-1">
                  <div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="continental.php" style="text-decoration: none"><h3 class="prev-indent-bot">Continental</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/continental.jpeg" alt=""></figure>
                            </div>
                           
                        </div>
                        
                </article></td><td>
                <article class="col-1">
                  <div class="indent-left">
                        <div class="img-indent-bot">
                            <a href="arabian.php" style="text-decoration: none"><h3 class="prev-indent-bot">Arabian</h3></a>
                            <div class="wrapper img-indent-bot">
                                <figure class="img-indent"><img src="images/arabian.jpeg" alt=""></figure>
                            </div>
                           
                        </div>
                        
                </article>
                </td></tr>
  
						</table>
        </div></div>
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
