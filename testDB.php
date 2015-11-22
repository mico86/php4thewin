<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sakila";

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!<br>';
} else {
    echo 'Phew we have it!<br>';
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error . "<br>");
} 
echo "Connected successfully<br>";

$sql = "SELECT first_name, last_name FROM sakila.actor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>