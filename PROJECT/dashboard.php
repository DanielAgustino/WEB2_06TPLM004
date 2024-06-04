<?php
session_start();

if (!isset($_SESSION['Username'])) {
    header('Location: index.php');
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
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['Username']); ?>!</h2>
        <p>This is your dashboard.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
