<?php
// Database connection
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "calendar_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get event data from form
$event = $_POST['event'];
$date = $_POST['date'];

// SQL query to insert event into database
$sql = "INSERT INTO events (event, date) VALUES ('$event', '$date')";

if ($conn->query($sql) === TRUE) {
    echo "Event saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
