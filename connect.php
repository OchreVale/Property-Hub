<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$db_name = "practice";
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
die("Couldn't connect to the database");
}
?>