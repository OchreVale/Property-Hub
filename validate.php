<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <?php
$servername = "localhost";
$username = "root";
$password = "root"; 
$db_name = "practice";
$db_port = 8889;
$conn = new mysqli($servername, $username, $password, $db_name, $db_port);
if($conn->connect_error){
    die("Something went wrong.");
}
$name = $_POST["username"];
$password = $_POST["password"];
$query = "SELECT * FROM Users WHERE username ='$name' and password = '$password'";
echo $query;
$results = $conn->query($query);
echo $results->num_rows;
if($results->num_rows ==1){
    while($row = mysqli_fetch_assoc($results)){
        $_SESSION["firstname"] = $row["firstname"];
        $_SESSION["lastname"] = $row["lastname"];
        header("Location:home.php");
    }
}
else{
    header("Location:login.php");
}
     ?>
</html>