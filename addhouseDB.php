
<?php
session_start();
if($_SERVER["REQUEST_METHOD"] ==="GET"){
    header("Location:home.php");
}
$seller_id =$_SESSION["ID"];
$country = $_POST["country"];
$street = $_POST["street"];
$price = $_POST["price"];
$city = $_POST["city"];
$sold = 0;
$zip= $_POST["zip"];
$state = $_POST["state"];
$IMG = $_POST["IMG"];
$floor =$_POST["floor"];
include 'connect.php';
$sql ="INSERT INTO Homes (street, city, state, zip, country, price, sold, Floor, IMG, seller_id)
VALUES('$street', '$city', '$state', '$zip', '$country', '$price', '$sold', '$floor', '$IMG', '$seller_id')";
if($conn->query($sql) === TRUE){
    echo "Success";
}
else{
    echo mysqli_error($conn);
}

?>