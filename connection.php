<?php

//setting the variables for connection
$host="localhost";
$db="simanta";
$pass="";
$user="root";

//Making connectoin
$conn=mysqli_connect($host, $user, $pass, $db) or die("Database Connection Error!");
?>