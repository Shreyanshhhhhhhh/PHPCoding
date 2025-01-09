<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard-container">
        <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
        <p>Account Balance: $<?php echo $_SESSION['balance']; ?></p>
        <form action="update.php" method="POST">
            <input type="number" name="amount" placeholder="Amount" required>
            <button type="submit" name="action" value="deposit">Deposit</button>
            <button type="submit" name="action" value="withdraw">Withdraw</button>
        </form>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
