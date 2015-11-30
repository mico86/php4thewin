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
	<link rel="stylesheet" href="styling.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li role="separator" class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Hello, world!</h1>
				<p>...</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>

		<div class="container-fluid">

			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="thumbnail card-dark">
						<img src="cardbg.jpg" class="img-responsive">
						<div class="caption">
							<h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="thumbnail">
						<img src="cardbg.jpg" class="img-responsive">
						<div class="caption">
							<h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="thumbnail card-dark">
						<img src="cardbg.jpg" class="img-responsive">
						<div class="caption">
							<h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="thumbnail">
						<img src="cardbg.jpg" class="img-responsive">
						<div class="caption">
							<h3 id="thumbnail-label">Thumbnail label<a class="anchorjs-link" href="#thumbnail-label"><span class="anchorjs-icon"></span></a></h3>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
						</div>
					</div>
				</div>
			</div><!-- /.row -->

			<div class="row formbox">
				<div class="col-md-12">
					<form class="form-inline" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="form-group">
							<label for="first_name">First Name</label>
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Tony">
						</div>
						<div class="form-group">
							<label for="last_name">Last Name</label>
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Montana">
						</div>
						<button type="submit" id="submit" name = "submit" class="btn btn-default">Add person</button>
					</form>
				</div><!-- /.col -->
			</div><!-- /.row formbox -->

			<div class="row phpblock">
				<div class="col-md-12 col-sm-12 col-xs-12"
					<?php
						// If form is submitted
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
							$password = "root";
							$conn = new mysqli($servername, $username, $password);

							// Check connection
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}

							// Run SQL query and insert new record
							if ($conn->query($sql) === TRUE) {
								$last_id = $conn->insert_id;
								echo "<p>New record created successfully. Last inserted ID is: " . $last_id . "</p>";
							} else {
								echo "Error: " . $sql . "<br>" . $conn->error;
							}

							// Close connection
							$conn->close();
						}

						$servername = "localhost";
						$username = "root";
						$password = "root";

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
								echo "<td><a href=\"delete.php?id=".$row['actor_id']."\">Delete</a></td></tr>";
							}
							echo "</table>";
						} else {
							echo "0 results";
							echo "</table>";
						}
						$conn->close();
					?>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

		<!-- Footer -->
		<div class="container-fluid footer">
			<div class="row">

				<div class="col-md-4 col-sm-4 col-xs-12 col-footer">
					<p>Made with <i class="fa fa-heart"></i> by ma dave.</p>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 col-footer">
					<p>Be sure to read <a href="#fakelinks">Terms</a> and <a href="#fakelinks">Privacy Policy</a>.</p>
					<ul class="social-media-links">
						<li><a class="fa fa-twitter tw" href="#fakelinks"></a></li>
						<li><a class="fa fa-facebook fb" href="#fakelinks"></a></li>
						<li><a class="fa fa-pinterest pn" href="#fakelinks"></a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-12 col-footer">
					<p><strong>Acme, Inc</strong> <br>Infinite Loop #1 - Milano, Italy.</p>
				</div>

			</div> <!-- /.row -->
		</div> <!-- /.container-fluid footer -->

	</body>
</html>