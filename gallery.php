
<html>
 <head>
 <title>Hotel Dream</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
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

 <div class="post_body"> 
 
 <h2><b>Our Rooms<b></h2>


<div class="row">
  <div class="column">
    <img src="p1.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="p2.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="p3.jpg" alt="Mountains" style="width:100%">
  </div>
</div>

  <h2><b>Food & Drinks<b></h2>
 <div class="row">
  <div class="column">
    <img src="p4.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="p5.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="p15.jpg" alt="Mountains" style="width:100%">
  </div>
  
</div>
 <h2><b>Exterior<b></h2>
 <div class="row">
  <div class="column">
    <img src="p10.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="p11.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="p12.jpg" alt="Mountains" style="width:100%">
  </div>
  
</div>
 
 
 
 
 
 
 
 
 
 
 
 </div>
 <div class="foot">
<body style = "text-align: center;">  
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
 
 
 
 
 </body>
 </html>