<?php
session_start();
if(is_null($_SESSION["firstname"])){
    header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html>
    <?php
include "connect.php";
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
        $_SESSION["ID"] = $row["ID"];
        header("Location:home.php");
    }
}
else{
    header("Location:login.php");
}
     ?>
</html>