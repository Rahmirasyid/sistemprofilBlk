<?php
$host = "localhost";
$user = "root";
$pass = ""; // default MySQL XAMPP tanpa password
$db   = "blk_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>