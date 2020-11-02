<!-- Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 
	 Declaration:i hereby declare that this is my own work and 
	 any code obtained by other sources will be refrenced.
-->
<?php


include_once("DBConn.php");
$DBConnect->multi_query(file_get_contents("../Login_v15/MyShop.sql"));

  
?>