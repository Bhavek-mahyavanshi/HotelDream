<?php

session_start();
include ("connection.php");
//error_reporting(0);



if(isset($_SESSION['id'])){

if(isset($_POST['submit']))
{
	$fn = $_POST['name_1'];
	$pn = $_POST['name_2'];
	$en = $_POST['email'];
    $rn = $_POST['room_type'];
	$ci = $_POST['check_in'];
	$co = $_POST['check_out'];
    $image = $_FILES['image']['tmp_name'];
    $imagecontent = addslashes(file_get_contents($image));
	$in = $_POST['id_no'];
	$an = $_POST['address'];
    
	
	$query = "INSERT INTO booking (name_1,name_2,email,room_type,check_in,check_out,img,id_no,address) VALUES ('$fn','$pn','$en','$rn','$ci','$co','$imagecontent','$in','$an')";

	$data = mysqli_query($conn,$query); 

	if($data)
	{
		echo "<script>alert('Booking succesfully ,Note: 1) payment mode is offline,so when u check-in you have to do your payment,(2) your room no: will be alloted once you done with your payment. Thank you!')</script>
		        </script>";
         
         header("refresh:0 url='contact.php'");
		
	}
	else
	{
		  echo("Error description: " . mysqli_error($conn));

		//header("location:signup");
	}
}
}
else{
	echo "<script >alert('please log in first'); </script>";
				 
				 header("refresh:0 url='login.php'");	
}

?>