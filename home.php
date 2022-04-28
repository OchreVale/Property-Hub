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
    </head>
    <body>
    <div>
        <form>
            <input type="text" name="query" placeholder="Search a house"/>
        </form>
        <a href="addhome.php" target="_blank"> Sell your house here.</a>
    </div>
        <?php
        include 'connect.php';
        echo "<h1>Welcome home ".$_SESSION["firstname"]."!</h1>";
        $sql = "SELECT * FROM Homes WHERE sold = 0";
        $results = $conn->query($sql);
        if($results->num_rows>0){
            while($row = mysqli_fetch_assoc($results)){
                echo "<div id = 'listing'>";
                echo $row["street"].", ".$row["city"].", ".$row["state"]." ".$row["zip"]."<br/>";
                echo "Listed for: ".$row["price"];
                echo "</div>";
            }
        }
        else{
            echo "No listing available.";
        }
        ?>
    </body>
</html>