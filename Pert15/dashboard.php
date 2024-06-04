<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <p>SELAMAT DATANG USER DANIEL AGUSTINO</p>
    <p>Halaman ini tampil karena anda berhasil login</p>
    <a href="logout.php">logout</a>
</body>
</html>
