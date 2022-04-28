<?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$db_name = "practice";
$db_port = 8889;
$conn = new mysqli($servername, $username, $password, $db_name, $db_port);
if($conn->connect_error){
die("Couldn't connect to the database");
}
?>