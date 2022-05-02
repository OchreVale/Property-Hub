<?php
include "connect.php";
if($_SERVER["REQUEST_METHOD"] ==="GET"){
    header("Location:home.php");
}
$password = $_POST["password"];
$email = $_POST["email"];
$sql = "UPDATE Users SET password ='$password' where username = '$email'";
$conn->query($sql);
header("Location:login.php");
?>