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
		$sql = "INSERT INTO users (firstname, lastname, email)
			VALUES ('Regis', 'Perez', 'regisbatistaperez@gmail.com')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

	?>
</body>
</html>