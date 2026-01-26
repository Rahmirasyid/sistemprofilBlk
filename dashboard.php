<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | UPTD BLK</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
        <p>Ini adalah dashboard sistem profil UPTD Balai Latihan Kerja.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
