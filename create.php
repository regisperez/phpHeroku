<html>
<head>
    <title> Teste </title>
</head>
<body>
    <?php

		$servername = "h40lg7qyub2umdvb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
		$username = "gzz0aspvp0vex2ad";
		$password = "dnafe4wg242hhe61";
		$dbname = "z0b3o8f5xmle1nmz";
				
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// sql to create table
		$sql = "CREATE TABLE users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table users created successfully";
		} else {
			echo "Error creating table: " . $conn->error;
		}

		$conn->close();

	?>
</body>
</html>