<?php
include ("koneksi.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.12/dist/full.min.css" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        header .menu {
            display: flex;
            gap: 15px;
        }

        header .menu a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
        }

        header .search-login {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        header .search-login i {
            font-size: 20px;
        }

        .product-container {
            text-align: center;
            padding: 40px;
        }

        .product-container h1 {
            margin-bottom: 30px;
            font-size: 32px;
        }

        .products {
            display: flex;
            justify-content: space-around;
            gap: 20px;
        }

        .product-card {
            width: 200px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .product-card img {
            width: 100%;
            border-radius: 10px;
        }

        .product-card h3 {
            margin-top: 10px;
            font-size: 18px;
        }

        .product-card p {
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>

    <header>
        <div class="menu">
            <a href="#">MAN</a>
            <a href="#">WOMAN</a>
            <a href="#">KIDS</a>
        </div>
        <div class="logo">MFB</div>
        <div class="search-login">
            <i>🔍</i> <!-- Search Icon -->
            <i>🛒</i> <!-- Cart Icon -->
            <a href="#">LOGIN</a>
        </div>
    </header>

    <div class="product-container">
        <h1>PRODUK KITA</h1>
        <div class="products">
            <div class="product-card">
                <img src="https://www.elfs-shop.com/~img/ok_cotton_side_double_line_px_0-7dc73-3073_608-twebp80.webp" alt="Kaos Putih">
                <h3>Kaos Putih</h3>
                <p>Rp.50.000</p>
            </div>
            <div class="product-card">
                <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/8/19/6646620/6646620_db83286b-7539-4a33-934e-35f575d4a909_1000_1000.jpg" alt="Jaket Kulit">
                <h3>Jaket Kulit</h3>
                <p>Rp.250.000</p>
            </div>
            <div class="product-card">
                <img src="https://down-id.img.susercontent.com/file/af33b5218dd4680238537c374c84d05c" alt="Varsity Evos">
                <h3>Varsity Evos</h3>
                <p>Rp.150.000</p>
            </div>
            <div class="product-card">
                <img src="https://www.frozenshop.com/image/cache/data/Baju-Pria/2019/december/celana-bahan-formal-panjang-slimfit-abu-terang-1-700x700.jpg" alt="Celana Formal">
                <h3>Celana Formal</h3>
                <p>Rp.200.000</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>