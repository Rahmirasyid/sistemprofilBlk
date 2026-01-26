<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | UPTD BLK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Login UPTD BLK Balai Latihan Kerja</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p class='error-message'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);
        }
        ?>
        <form method="POST" action="login_process.php">
            <label for="username">Username:</label>
            <input type="text" name="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>