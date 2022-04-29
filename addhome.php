<?php
session_start();
if(is_null($_SESSION["firstname"])){
    header("Location:signup.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sell your house</title>
        <link rel="stylesheet" href="index.css"/>
    </head>
    <body>
        <form method="POST" action="addhouseDB.php"> 
            <input type="text" name="street" placeholder="123 Main Street" required/>
            <input type="text" name="city" placeholder="City" required/>
            <input type="text" name="state" placeholder="State" required/>
            <input type="number" name="zip" placeholder="30045" required/>
            <input type="text" name="country" placeholder="country" required/>
            <input type="number" name="price" placeholder="$2,000,000" required/>
            <input type="numer" name="floor" placeholder="How many square feet is the house?" required accept=".png, .gif, .jpeg"/>
            <input type="number" name="parking" placeholder="Parking space allocated" required>
            <input type=" number" name="year" placeholder="When was the house built" required>
            <input type="submit" value="Sell this house"/>

        </form>
    </body>
</html>