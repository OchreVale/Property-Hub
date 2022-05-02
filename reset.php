<?php
include "connect.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Reset your password</title>
	<link rel="stylesheet" href="index.css">
    </head>
    <body>
    <form action="processreset.php" method="POST">
		<fieldset>
			<legend>Reset Password</legend>
			<input name ="email" type="text" required placeholder="Enter username"/>
			<input name ="password" type="password" required placeholder="Enter new password"/>
			<input type="submit" value="Reset your password"/>
		</fieldset>
    </form>
    </body>
</html>