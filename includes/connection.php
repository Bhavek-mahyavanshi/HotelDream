<?php
$servername = "localhost";
$username= "root";
$password = "";
$dbname = "hotel_room";

$conn=mysqli_connect($servername,$username,$password,$dbname);                    
 if($conn)
 {
     echo "connection is ok";
 }
else
{
  die("connection failed because".mysqli_connect_error());            
 }
?>