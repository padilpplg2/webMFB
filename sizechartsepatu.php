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
<img alt="Size chart" class="w-1/6" height="400" src="https://www.relaxofootwear.com/assets/img/mens_footwear_size_chart.png" width="1000"/>
</body>
</html>