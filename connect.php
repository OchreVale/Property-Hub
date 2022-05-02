<?php
$servername = "localhost";
$username = "dlisangi1"; #change 'dlisangi' to your icollege login.
$password = "dlisangi1"; #change 'dlisangi1' to your icollege login.
$db_name = "dlisangi1"; # change 'dlisangi1' to your icollege login.
$conn = new mysqli($servername, $username, $password, $db_name);
if($conn->connect_error){
die("Couldn't connect to the database");
}
?>