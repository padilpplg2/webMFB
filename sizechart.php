<?php
include("koneksi.php");
session_start();

// Ambil nama pengguna dari sesi
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'username';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img alt="Size chart" class="w-1/6" height="500" src="https://cdn.shopify.com/s/files/1/0363/2493/3763/files/SIZE_CHART-01_1_480x480.jpg?v=1676102635" width="500"/>
</body>
</html>