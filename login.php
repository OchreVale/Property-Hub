<?php
session_start()
?>
<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="index.css">
        <title>Log in</title>
    </head>
    <body>
        <form action="validate.php" method="POST">
			<fieldset>
				<legend>Login</legend>
				<input type="text" name="username" placeholder="Enter username" required/>
				<input type="password" name = "password" placeholder="Enter password" required/>
				<input type="submit" value="Log into your account"/>
                <a href="reset.php">Forgot your password?</a>
			</fieldset>
        </form>
    </body>
</html>
