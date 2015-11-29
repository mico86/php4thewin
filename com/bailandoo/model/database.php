<?php
class Database {
	private $servername = "localhost";
	private $username = "root";
	private $password = "root";
	private $dbname = "bailandoo";
	public function setServerName($servername) {
		$this->servername = $servername;
	}
	public function setUserName($username) {
		$this->username = $username;
	}
	public function setPassword($password) {
		$this->password = $password;
	}
	public function setDbName($dbname) {
		$this->dbname = $dbname;
	}
	public function getConnection() {
		if (! function_exists ( 'mysqli_init' ) && ! extension_loaded ( 'mysqli' )) {
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
		return $conn;
	}
}
?>