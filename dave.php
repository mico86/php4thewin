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
	<link rel="stylesheet" href="styling.css"
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	
	<body>
		<div class="container">

			<div class="formbox">
				<form class="form-inline" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="Jane Doe">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="but@dave.com">
					</div>

					<!-- <input type="submit" id="submit" name = "submit" value="Go!" /> -->
					<button type="submit" id="submit" name = "submit" class="btn btn-default">Add person</button>
				</form>
			</div>

		<?php

			// If the name field is filled in
			if (isset($_POST['name']))
			{
				$name = $_POST['name'];
				$email = $_POST['email'];
				printf("<p>Hi %s! <br />", $name);
				printf("The address %s will soon be a spam-magnet! </p>", $email);
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
			echo "<p>Connected successfully to DB ...</p>";
			
			echo "<br>";
			
			$sql = "SELECT actor_id, first_name, last_name FROM sakila.actor";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row

				// design table header
				echo '<table cellpadding="0" cellspacing="0" class="table table-hover">';
				echo '<tr><th>ID</th><th>NAME</th><th>LAST</th><th>Key</th><th>ACTION</th></tr>';

				while($row = $result->fetch_assoc()) {

					// design table rows
					echo "<tr><td>" . $row["actor_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["actor_id"] . "</td><td>" . $row["actor_id"] . "</td>" . "<td>delete</td></tr>";
						}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		</div>
	</body>
</html>