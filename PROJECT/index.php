<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST">
            <h2>Login</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
            <?php
            if (isset($_GET['error'])) {
                echo '<p class="error">'.htmlspecialchars($_GET['error']).'</p>';
            }
            ?>
        </form>
    </div>
</body>
</html>
