<?php
session_start();
if(is_null($_SESSION["firstname"])){
    header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html>
    <?php
    $pass = $_POST["password"];
    $user = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $db_name = "practice";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error){
        die("Something went wrong.");
    }
    $query = "INSERT INTO Users (
        firstname, lastname, password, username
    ) VALUES(
        '$firstname', '$lastname', '$pass', '$user'
    )";
    if($conn->query($query)=== TRUE){
        header("Location:"."login.php");
    }
    else{
        echo mysqli_error($conn);
    }
     ?>
</html>