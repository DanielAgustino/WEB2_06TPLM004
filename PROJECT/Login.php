<?php
session_start();
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT password FROM login1 WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    // Check if the username exists
    if ($stmt->num_rows > 0) {
        // Bind the result to a variable
        $stmt->bind_result($hashed_password);
        $stmt->fetch();
        
        // Verify the password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $username;
            header('Location: dashboard.php');
            exit();
        } else {
            header('Location: index.php?error=Invalid Username or Password');
            exit();
        }
    } else {
        header('Location: index.php?error=Invalid Username or Password');
        exit();
    }
} else {
    header('Location: index.php');
    exit();
}
?>
