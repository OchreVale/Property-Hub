<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
		<link rel="stylesheet" href="index.css">
    </head>
	<fieldset>
    <?php
    include "connect.php";
    $Users= "SELECT COUNT(ID) FROM Users";
    $Homes = "SELECT COUNT(ID) FROM Homes WHERE Sold = '0'";
    $sold = "SELECT SUM(price) FROM Homes Where Sold ='1'";
    $market = "SELECT SUM(price) FROM Homes where sold = '0'";
    $Users = $conn->query($Users);
    $Homes = $conn->query($Homes);
    $sold = $conn->query($sold);
    $market = $conn->query($market);
    echo "<div style ='width:500px, margin:auto'>";
    echo "So far, we count ";
    print_r(mysqli_fetch_assoc($Users)["COUNT(ID)"]);
    echo " users.<br/>";
    echo "The market on our site is worth ";
    print_r(mysqli_fetch_assoc($market)["SUM(price)"]);
    echo " dollars.<br/>";
    echo "We've sold ";
    print_r(mysqli_fetch_assoc($sold)["SUM(price)"]);
    echo " in dollars!"
    
    ?>
	</fieldset>
</html>