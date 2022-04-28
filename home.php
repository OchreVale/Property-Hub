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
        echo "<h1>Welcome home".$_SESSION["firstname"]."</h1>"
        ?>
    </body>
</html>