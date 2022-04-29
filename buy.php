<!DOCTYPE html>
<html>
    <head>Buy this house</head>
    <body>
        Buy this house.
        <?php
        session_start();
        include 'connect.php';
        $id = $_GET["ID"];
        $_SESSION["house_id"] = $id;
        $_SESSION["seller"] = $_GET["sid"];
        if (is_null($id)){
            header("Location:home.php");
        }
        $sql = "SELECT * FROM Homes WHERE ID = '$id'";
        $results = $conn->query($sql);
        setlocale(LC_MONETARY,"en_US");
        if($results->num_rows>0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<div class = 'listing' style =' width:500px;'>";
                echo $row["street"].", ".$row["city"].", ".$row["state"]." ".$row["zip"]."<br/>";
                echo "<img src ='house.jpeg' alt= 'house' style = '
                height: 200px; width:200px'/> <br/>";
                echo "Listing price: ".$row["price"]."<br/>";
                echo "Square footage: 2000 <br/>";

                echo "</div>";
            }
        }
        else{
            echo "No listing available.";
        }
        include "checkout.php"
        ?>
    </body>
</html>