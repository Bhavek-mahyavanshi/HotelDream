<?php


session_start();
include ("connection.php");
//error_reporting(0);




if(isset($_POST['submit']))
{
	$fn = $_POST['name'];
	$gn = $_POST['gender'];
	$en = $_POST['email'];
    $ps = $_POST['pswd'];
    
	
	$query = "INSERT INTO signup (name,email,gender,pswd) VALUES ('$fn','$en','$gn','$ps')";

	$data = mysqli_query($conn,$query); 

	if($data)
	{
		header("location:login.php");
		echo "data inserted into database";
		
	}
	else
	{
		  echo("Error description: " . mysqli_error($conn));

		//header("location:signup");
	}
}

?>