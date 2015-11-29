<?php
class Event {
	private $id;
	private $name;
	public function setId($id) {
		$this->name = $id;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getId() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}
	public function insert() {
		$database = new Database ();
		$conn = $database->getConnection ();
		
		$sql = "INSERT INTO bailandoo.event (name) VALUES ('this.name')";
		// Check connection
		if ($conn->connect_error) {
			die ( "Connection failed: " . $conn->connect_error );
		}
		// Run SQL query and insert new record
		if ($conn->query ( $sql ) === TRUE) {
			echo "<p>New record created successfully.";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		// Close connection
		$conn->close ();
	}
	public function update() {
	}
	public function delete() {
	}
}
?>