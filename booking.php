<?php
include ("connection.php");
error_reporting(0);
?>
<html>
 <head>
 <title>Hotel Dream</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="css/style1.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
   <script>alert('Make sure you Login First before booking your room.')</script>
   <li><a href="index.php">Our Hotel</a></li>
   <li><a href="about.php">About us</a></li>
   <li><a href="booking.php">Booking</a></li>
   <li><a href="gallery.php">Gallery</a></li>
   <li><a href="contact.php">contact us</a></li>
   
   </ul>
   </nav>
   </div> 
   </div>

 <div class="body">
 <section>
<br><br>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">

	<h4 class="card-title mt-2">Booking</h4>
</header>
<article class="card-body">
<form action="db_booking.php" method= "post" onsubmit="return validation()" class="bg-light" enctype="multipart/form-data">
	<div class="form-group">
		<label>Person Name1</label>
		<input type="text" class="form-control"   name="name_1">
		<span class="text-danger font-weight-bold"></span>
		
	</div>
	<div class="form-group">
		<label>Person Name2<small class="form-text text-muted">(Optional)</small></label>
		<input type="text" class="form-control"   name="name_2">
		<span class="text-danger font-weight-bold"></span>
		<small class="form-text text-muted">Enter if person is available.</small>
	</div>
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="jo@gmail.com"  name="email">
		<span id="emailerror" class="text-danger font-weight-bold"></span>
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->

		
	<div class="form-group">
		<label>Room Type</label>
		<select class="form-control" name="room_type">
    	<option selected>Choose...</option>
	    <option value="1">non-ac-1200/day</option>
	    <option value="2">Delux-2400/day</option>
	    <option value="3">Super-Delux-3500/day</option>
	  </select>
	  <small class="form-text text-muted">We have room for max 2 people.</small>
	</div>
		<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Check-In</label>
		  <input type="date" class="form-control" name="check_in" >
		  	<span id="doberror" class="text-danger font-weight-bold"></span>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Check-Out</label>
		  <input type="date" class="form-control" name="check_out" >
		  	<span id="doberror" class="text-danger font-weight-bold"></span>
		</div> <!-- form-group end.// -->
	</div> 
	<div class="form-row">
		<div class="col form-group">
		<label>ID Proof:</label>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<input type="file" class="file" accept="image/*" name="image">
      <!--	<label class="custom-file-label " for="customFile" style="text-align:left;">Choose Image</label>-->
      	<span id="imageerror" class="text-danger font-weight-bold"></span>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Id Proof No:</label>
		<input type="text" class="form-control"   name="id_no">
		<span class="text-danger font-weight-bold"></span>
		
	</div>
  <div class="form-group">
  	<label for="comment">Permanent Address</label>
  	<textarea class="form-control" rows="5" id="comment" name="address"></textarea>
	</div>
  <div class="but card-body">
					<input type="submit" name="submit" value="Book Room"class="btn btn-primary btn-block">
            				
				</div>
</form>
</article> <!-- card-body end .// -->
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
</section>


 </div>
 
 
 </div>
 
 
 
 
 
 </body>
 </html>