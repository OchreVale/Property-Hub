<?php
session_start();
if(is_null($_SESSION["firstname"])){
    header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome home</title>
        <link rel="stylesheet" href="index.css">
        <style> 
        <?php
        include "index.css";
        ?>
    </style>
    </head>
    <body>
    <div class="left">
    <?php
        echo "<h1>Welcome home ".$_SESSION["firstname"]."!</h1>";
        ?>
        <a href="logout.php">Log out</a>
        <form>
            <input type="text" name="query" placeholder="Search a house"/>
        </form>
        <a href="addhome.php" target="_blank"> Sell your house here.</a>
</br>
        <a href="dashboard.php">See our stats!</a>
    </div>
        <?php
        include 'connect.php';
        $sql = "SELECT * FROM Homes WHERE sold = 0";
        $results = $conn->query($sql);
        setlocale(LC_MONETARY,"en_US");
        if($results->num_rows>0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<div class = 'listing' style =' width:500px; height:150px; margin: auto; left:100%'>";
                echo "<a href=buy.php?ID=".$row["ID"]."&sid=".$row["seller_ID"].">";
                echo $row["street"].", ".$row["city"].", ".$row["state"]." ".$row["zip"]."<br/>";
                echo "</a>";
                echo "<img src ='house.jpeg' alt= 'house' style = '
                height: 100px; width:100px'/> <br/>";
                echo "Listing price: ".$row["price"];
                echo "</div>";
            }
        }
        else{
            echo "No listing available.";
        }
        ?>
    </body>
</html>