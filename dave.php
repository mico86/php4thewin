<!DOCTYPE html>
<html lang="en">

	<title>DB experiment</title>
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
	</script>
	<![endif]-->
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<body>
		<div class="container">

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<p>
				<label for="name">Name:</label> <br />
				<input type="text" id="name" name="name" size="20" maxlength="40" />
			</p>
			<p>
				<label for="email">email:</label> <br />
				<input type="text" id="email" name="email" size="20" maxlength="40" />
			</p>
			<input type="submit" id="submit" name = "submit" value="Go!" />
		</form>
				
		<?php

			// If the name field is filled in
			if (isset($_POST['name']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				printf("Hi %s! <br />", $name);
				printf("The address %s will soon be a spam-magnet! <br />", $email);
			}

			$servername = "localhost";
			$username = "root";
			$password = "kalimero";

			// Create connection
			$conn = new mysqli($servername, $username, $password);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";
			
			echo "<br>";
			
			$sql = "SELECT actor_id, first_name, last_name FROM sakila.actor";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "id: " . $row["actor_id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
				}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		</div>
	</body>
</html>