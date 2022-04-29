
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
$floor =$_POST["floor"];
$year = $_POST["year"];
$parking = $_POST["parking"];
include 'connect.php';
$sql ="INSERT INTO Homes (street, city, state, zip, country, price, sold, Floor, seller_id, parking, year)
VALUES('$street', '$city', '$state', '$zip', '$country', '$price', '$sold', '$floor','$seller_id', '$parking', '$year')";
if($conn->query($sql) === TRUE){
    header("Location:addhome.php");
}
else{
    echo mysqli_error($conn);
}

?>