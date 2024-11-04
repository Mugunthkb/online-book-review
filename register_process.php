<?php
// Database connection setup (replace with your credentials)
$hostname = "localhost:3306";
$username = "root";
$password = "";
$database = "sellbooks";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password

// Insert user into the database
$sql = "INSERT INTO user_db (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
     header("Location: login.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>
