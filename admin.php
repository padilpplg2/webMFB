<?php
session_start();
include('koneksi.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Kembali ke halaman login jika belum login
    exit;
}

// Kode untuk halaman admin
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome to Admin Page</h1>
    <p>This is the admin panel.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
