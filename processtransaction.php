<?php
session_start();
include "connect.php";
$buyer_id = $_SESSION["ID"];
$seller = $_SESSION["seller"];
$house = $_SESSION["house_id"];
$sql = "INSERT INTO Transactions (seller_ID, buyer_id, house_id)
VALUES ('$seller', '$buyer_id', '$house')";
$conn->query($sql);
$update = "UPDATE Homes SET sold = '1' WHERE ID = '$house'";
$conn->query($update);
header("Location:home.php");
print_r($_SESSION)
?>