<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
                 <link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>CONTACT US FOR SUGAR MOMMY/DADDY</h3></strong>
				<br />
				<br />
				<center><img src = "images/hotel.jpg" width = "300" height = "300" /></center>
				<br />
				<br />
				<center>
				<p>Contact No: 123123</p>
				<p>Email: hotel@gmail.com</p>
                                <ul id = "menu">
                                 <li><a href ="https://www.facebook.com/profile.php?id=100070328732327" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                </ul>
				</center>
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		<label>&copy; Quezon City University 2022 </label>
	</div>

</body>
<script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>	
</html>