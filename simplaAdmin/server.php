<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname= "simplaAdmin";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection

if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>

