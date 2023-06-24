<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Garv's Boutique Hotel</a>
			</div>
                      <ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i>Account</a>
					<ul class="dropdown-menu">
						
                                                <li><a href="signup.php"><i class = "glyphicon glyphicon-registration-mark"></i> Create</a></li>
                                                <li><a href="loog.php"><i class = "glyphicon glyphicon-log-in"></i> Login</a></li>
					</ul>
				</li>
			</ul>
                      
		</div>
	</nav>	
	<ul id = "menu">
		<button><li><a href = "index.php">Home</a></li></button> |
		<button><li><a href = "aboutus.php">About us</a></li></button> |
		<button><li><a href = "contactus.php">Contact us</a></li></button> |
		<button><li><a href = "gallery.php">Gallery</a></li></button> |
		<button><li><a href = "dineandlounge.php">Dine and Lounge</a></li></button> |			
		<button><li><a href = "signup.php">Make a reservation</a></li></button> |
                <button><li><a href = "rulesandregulation.php">Rules and Regulation</a></li></button>
		
                
	</ul>
       <nav style = "background-color: yellow;" class = "navbar navbar-default">
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/1.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/5_2.jpg" style = "width:100%; height:450px;"  />
			</div>
		
			<div class="item">
				<img src="images/8.jpg" style = "width:100%; height:450px;" />
			</div>
		
			<div class="item">
				<img src="images/1_2.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/11.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/14.jpg" style = "width:100%; height:450px;" />
			</div>
			
			<div class="item">
				<img src="images/13.jpg" style = "width:100%; height:450px;" />
			</div>
			
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Quezon City University 2022 </label>
	</div>
        <div class="container">
          <h1>OUR LOCATION</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.702615934462!2d121.03309421744382!3d14.575970200000024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c84c96f104f1%3A0x6ef3c3faf1999459!2sRedDoorz%20Plus%20%40%20Boni%20Avenue%20Mandaluyong!5e0!3m2!1sen!2sph!4v1666436134464!5m2!1sen!2sph" width="1200" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </nav>
       
</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>