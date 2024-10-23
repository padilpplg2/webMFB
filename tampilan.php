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
            position: relative;
        }

        header .logo {
            font-size: 24px;
            font-weight: bold;
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

        /* Dropdown Styles */
        .dropbtn {
            background-color: transparent; /* Mengubah latar belakang menjadi transparan */
            color: black; /* Ubah warna teks sesuai kebutuhan */
            padding: 10px;
            font-size: 16px;
            
            cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
            background-color: rgba(0, 0, 0, 0.1); /* Tambahkan efek hover */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            overflow: auto;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown a:hover {background-color: #ddd;}

        .show {display: block;}
    </style>
</head>
<body>

    <header>
        <div class="menu">
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Kategori</button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="#">Man</a>
                    <a href="#">Woman</a>
                    <a href="#">Kids</a>
                </div>
            </div>
        </div>
        <div class="logo">MFB</div>
        <div class="dropdown">
            <button onclick="userFunction()" class="dropbtn"><?php echo htmlspecialchars($username); ?></button>
            <div id="userDropdown" class="dropdown-content">
                <a href="#">Wishlist</a>
                <a href="logout.php">Logout</a>
            </div>
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

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function userFunction() {
            document.getElementById("userDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    if (dropdowns[i].classList.contains('show')) {
                        dropdowns[i].classList.remove('show');
                    }
                }
            }
        }
    </script>
</body>
</html>
