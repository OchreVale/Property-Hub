<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="index.css">
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <div class="nav"></div>
        <form action="addUser.php" method="POST">
			<fieldset>
				<input name ="firstname" type="text" required placeholder="First Name"/>
				<input name=" lastname" type="text" required placeholder="Last Name"/>
				<input name ="username"type="text" placeholder="Username" required/>
				<input name="password"type="password" placeholder="Password" required/>
				<input type="submit" value=" Sign up"/> <a href="login.php">Already have an account? Login</a>
			</fieldset>
        </form>
        <?php
        $servername = "localhost";
		$username = "root";
		$password = "root"; 
		$db_name = "practice";
		$db_port = 8889;
        $conn = new mysqli($servername, $username, $password, $db_name, $db_port);
        if($conn->connect_error){
            die("Couldn't connect to the database");
        }
        $sql = "CREATE TABLE Users (ID int AUTO_INCREMENT, PRIMARY KEY (ID), firstname VARCHAR(50), lastname VARCHAR(50),
         username VARCHAR(50) UNIQUE, password VARCHAR(50))";
        if ($conn->query($sql) === TRUE){
            echo "successful created a Users table";
        }
        $sql = "CREATE TABLE Homes (ID int AUTO_INCREMENT, PRIMARY KEY (ID), street VARCHAR (25), city  VARCHAR(50),
        state VARCHAR(25), zip INT, country VARCHAR(25) , price INT(255),
         sold BOOLEAN, Floor INT, seller_ID INT, FOREIGN KEY(seller_ID) REFERENCES Users(ID))";
       if($conn->query($sql) === TRUE){
           echo "created a home database";
       }
        $query = "CREATE TABLE Transactions (seller_ID int, FOREIGN KEY(seller_ID) REFERENCES Users(ID), buyer_id int, 
        FOREIGN KEY (buyer_id) REFERENCES Users(ID), Home_id int, foreign key (Home_id) references Homes(ID))";
        if ($conn->query($query)){
            echo "made a transactions table";
        }
        ?>
    </body>
</html>