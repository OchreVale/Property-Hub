<?php
if($_SERVER["REQUEST_METHOD"] ==="GET"){
    header("Location:home.php");
}
$query = $_POST["query"];
?>
<!DOCTYPE html>
<html>
    <head>
        <?php 
        echo "<title>".$query."</title>";
        ?>
    </head>
    <body>
    <?php
        include 'connect.php';
        $sql = "SELECT * FROM Homes WHERE sold = 0 AND zip= '$query'";
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
            echo "No listing available in ".$query.".";
        }
        ?>
    </body>
    </body>
</html>