<?php
session_start();

$servername = "localhost";
$username = "root";
$password = '123$Shreyansh';
$dbname = "bank_system";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get login details
$user = $_POST['username'];
$pass = $_POST['password'];

// Check user in the database
$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['balance'] = $row['balance'];
    header("Location: dashboard.php");
} else {
    echo "Invalid username or password.";
}

$conn->close();
?>
