<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Log in</title>
    </head>
    <body>
        <form action="validate.php" method="POST">
            <input type="text" name="username" placeholder="Enter username" required/>
            <input type="password" name = "password" placeholder="Enter password" required/>
            <input type="submit" value="Log into your account"/>
        </form>
    </body>
</html>
