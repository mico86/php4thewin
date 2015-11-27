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
				<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Tony">
					</div>
					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Montana">
					</div>

					<!-- <input type="submit" id="submit" name = "submit" value="Go!" /> -->
					<button type="submit" id="submit" name = "submit" class="btn btn-default">Add person</button>
				</form>
			</div>

		<?php
			// If the name field is filled in
			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				// form input sanitization
				function test_input($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}

				$first_name = test_input($_POST["first_name"]);
				$last_name = test_input($_POST["last_name"]);


				$sql = "INSERT INTO sakila.actor (first_name, last_name) VALUES ('$first_name', '$last_name')";

				// Create connection
				$servername = "localhost";
				$username = "root";
				$password = "kalimero";
				$conn = new mysqli($servername, $username, $password);

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				if ($conn->query($sql) === TRUE) {
					$last_id = $conn->insert_id;
					echo "<p>New record created successfully. Last inserted ID is: " . $last_id . "</p>";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();

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

			echo "<br>";
			
			$sql = "SELECT actor_id, first_name, last_name FROM sakila.actor";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row

				// design table header
				echo '<table cellpadding="0" cellspacing="0" class="table table-hover">';
				echo '<tr><th>ID</th><th>NAME</th><th>LAST</th><th>ACTION</th></tr>';

				while($row = $result->fetch_assoc()) {

					// design table rows
					echo "<tr><td>" . $row["actor_id"] . "</td><td>" . $row["first_name"] . "</td><td>" . $row["last_name"] . "</td>";

					echo "<td><a href=\"delete.php?id=".$row['actor_id']."\">Delete</a></td>";
						}
			} else {
				echo "0 results";
			}
			$conn->close();
		?>
		</div>
	</body>
</html>