<?php

session_start();
include ("connection.php");
//error_reporting(0);




		if(isset($_POST['submit']))
		{
			
			
			$en = $_POST['email'];
			$ps = $_POST['pswd'];
			
			
			$query = "select * from signup where email='$en' and pswd='$ps'";

			$data = mysqli_query($conn,$query); 
			$row = mysqli_num_rows($data);

			if($row==1)
			{
				$info=mysqli_fetch_assoc($data);
				$_SESSION['id']=$info['id'];
				$_SESSION['name']=$info['name'];
				echo "<script >alert('login succesfully'); </script>";
				 
				 header("refresh:0 url='booking.php'");

				
			}
			else
			{
				 
				echo "<script >alert('please sign up first'); </script>";
				 
				 header("refresh:0 url='signup.php'");
			}
		}


?>