
<html>
 <head>
 <title>Hotel Dream</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style1.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
 <style>
 
h5 {
  color: black;
  text-align: center;
  font-size: 20px;
}

h6 {
  color: black;
  text-align: left;
  font-size: 20px;
}
 
 </style>
 </head>
 <body>
 <?php

session_start();
?>
 
 
  <div id="top_bar">
 
<h1 align="left" > Welcome to Hotel Dream </h1>
 <div class="nav1">
<?php
 if(isset($_SESSION['id'])){
 echo" <a href='logout.php'>Logout</a>	 <br> <a href='#' >".$_SESSION['name']."</a>";
 }
 else
 {
	echo '<a href="login.php">Login</a> |<br> <a href="signup.php" >Sign-up</a>'; 
	//echo" <a href='logout.php'>Logout</a>	 <br> <a href='#' >".$_SESSION['name']."</a>";
 }
?>
</div>	
</div> 
 <div id="menu_bar"> 
 
 <div class = "container">
<header>
   <nav class="top-nav">
   <ul class="menu">
   
   <li><a href="index.php">Our Hotel</a></li>
   <li><a href="about.php">About us</a></li>
   <li><a href="booking.php">Booking</a></li>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="contact.php">contact us</a></li>
   
   </ul>
   </nav>
   </div> 
   </div>


 <br><br>
 <div class="post_body">
 <section class="footer" id="5">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<img src="logo1.jpeg" class="footer-logo">
					
				</div>
				<div class="col-md-3">
				<h4>Features</h4>
				<p>Discount & Offers</p>
				<p>best room's for stay</p>		
				</div>
				<div class="col-md-3">
				<h4>Quick Contact</h4>
				<p><i class="fa fa-phone-square"></i>+91 9537634661</p>
			
				<p><i class="fa fa-envelope"></i>info@hoteldream.com</p>
				
				<p><i class="fa fa-home"></i>seaface road daman,nani daman-396210</p>		
				</div>
				<div class="col-md-3">
					<h4>Follow Us on</h4>
				<p><i class="fa fa-facebook-official"></i>Hotel_dream</p>
				<p><i class="fa fa-instagram"></i>hotel_dream</p>
				<p><i class="fa fa-twitter"></i>@Hotel_Dream</p>				
				</div>
			</div><hr>
			<!--<p class="copyright">Made with <i class="fa fa-heart"></i>by w3schools</p>-->
		</div>
		
 </div> 
 </body>
 </html>