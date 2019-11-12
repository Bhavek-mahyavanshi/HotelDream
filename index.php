
<html>
 <head>
 <title>Hotel Dream</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 	
	
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: center;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  
  border-radius: 3px 0 0 3px;
}
.prev {
  left: 0;
  
  border-radius: 3px 0 0 3px;
}
/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: #800000;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}

.btn:hover {
  background-color: black;
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
   <li><a href="booking.php">Booking </a></li>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="contact.php">contact us</a></li>
   
   </ul>
   </nav>
   </div> 
   </div>

 <div class="post_body">
 
 <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="s3.jpg" style="width:100%">
  <form method="get" action="booking.php">
  <input type="submit"  value="Book Room"class="btn" style="height:80px;width:200px">
</form>  
  <div class="text">Hotel pool</div>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="s5.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="s1.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</div>
</body>
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
 
 
 
 
 
 </html>