
<html>
 <head>
 <title>Hotel Dream</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
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
<style>


h2 {
  color: black;
  text-align: left;
  font-size: 20px;
}
p{
	text-align: left;
	font-size: 15px;
	
	
}
.body{
		
	width:100%;
	height:60%;
    background-image: linear-gradient(to right, lightgray, white);
    color:black;
	text-align:center;
	
	
}
</style>
</head>
<body>
 <div class="body">
<h2> About us</h2>
<img src="about.jpg" Align="right"; style="width:460px;height:260px;">
 <p>The inception of the Dream Hotel was in the year of 2017, and this year ,2019 marks the first of many decades of </p><p>majestic and an ever growing list of hospitality destinations to serve travellers from all over the world.
 </p><br>
 <p>
 we are a team of highly trained professionals in the hospitality industry , and we are proud  to have served thousand of</p><p> tourists and travellers
 </p><br>
 <p>At Dream hotel we place extremely high value on  delivering the highest class of guest service using cutting edge,</p><p>modern systems while maintaining the rich indian heritage of being a kinnd host,</p><p>And living upto the maxim 'Guest is akin to God'-'Atithi Devo Bhavah'</p>
 </div>
 
 
 
 
 <div class="foot">
<div style = "text-align: center;">  
 <img src="footer.png" alt="hotel" >
<h1 align="center">Hotel Dream<h1>  
 <h2 > Opening soon: <h2>
 <a  >Moti Daman<a>   |   <a >vapi<a>   |  <a>Goa</a>   |   <a >Mumbai<a>   |   <a >Baroda<a>  |  <a>Ahemdabad</a>
 <hr>
 <h2 align="center"> Our Social Network & Additional Links<h2>
 
 <a align="center" href="www.facebook.com" class="fa fa-facebook"></a>
 <a href="#" class="fa fa-twitter"></a>
 <a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>

 </div>
 </div>
 
 
 
 </body>
 </html>