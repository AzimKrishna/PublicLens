<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "missing_person";

if(!$conn = mysqli_connect($hostname, $username, $password, $database)){

 die("Database connection failed");
}


?>