<?php
session_start();

$servername = "localhost";
$username = "root";
$password = '123$Shreyansh';
$dbname = "bank_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user = $_SESSION['username'];
$amount = $_POST['amount'];
$action = $_POST['action'];

$sql = "SELECT balance FROM users WHERE username='$user'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$current_balance = $row['balance'];

if ($action == "deposit") {
    $new_balance = $current_balance + $amount;
} elseif ($action == "withdraw") {
    if ($amount > $current_balance) {
        die("Insufficient funds.");
    }
    $new_balance = $current_balance - $amount;
}

$sql = "UPDATE users SET balance='$new_balance' WHERE username='$user'";
$conn->query($sql);

$_SESSION['balance'] = $new_balance;
header("Location: dashboard.php");

$conn->close();
?>
