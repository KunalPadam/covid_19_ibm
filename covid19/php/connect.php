<?php
$servername ="localhost";
$username ="";
$password ="";
$dbname ="covid-19-india";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>	