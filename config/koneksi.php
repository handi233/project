<?php

// Create connection
	$server   = "localhost";
    $username = "root";
    $password = "";
    $database = "website";
  
    //sambungkan ke database
    $con = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$con) 
{
	echo "gagal";
}

?>