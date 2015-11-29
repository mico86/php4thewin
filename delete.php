<?php
    // Create connection
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $conn = new mysqli($servername, $username, $password);

    // sql to delete a record

    $id = $_GET['id']; // $id is now defined

    // or assuming your column is indeed an int
    // $id = (int)$_GET['id'];

    $sql = "DELETE FROM sakila.actor WHERE actor_id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        header("Location: dave.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    mysqli_close($conn);

?>

