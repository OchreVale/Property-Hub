<!DOCTYPE html>
<html>
    <?php
    $pass = $_POST["password"];
    $user = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $servername = "localhost";
    $username = "root";
    $password = "root"; 
    $db_name = "practice";
    $db_port = 8889;
    $conn = new mysqli($servername, $username, $password, $db_name, $db_port);
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