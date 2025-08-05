<?php
$servername = "localhost"; // Your server name
$username = "username"; // Your database username
$password = "password"; // Your database password
$dbname = "school"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO students (name, email, enrollment_date, major) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $enrollment_date, $major);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$enrollment_date = $_POST['enrollment_date'];
$major = $_POST['major'];
$stmt->execute();

echo "New record created successfully";

$stmt->close();
$conn->close();
?>