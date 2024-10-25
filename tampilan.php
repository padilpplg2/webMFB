<?php
include("koneksi.php");
session_start();

// Ambil nama pengguna dari sesi
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'username';
?>
<html>
 <head>
  <title>
   MFB
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
  <header class="bg-white shadow-md">
   <div class="container mx-auto px-4 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold">
     MFB
    </h1>
    <nav class="space-x-4 flex items-center">
     <a class="text-black hover:text-red-500" href="#">
      Home
     </a>
     <a class="text-black hover:text-red-500" href="#">
      New Arrivals
     </a>
     <a class="text-black hover:text-red-500" href="#">
      Gowns
     </a>
     <a class="text-black hover:text-red-500" href="#">
      Shirts
     </a>
     <a class="text-black hover:text-red-500" href="#">
      Man
     </a>
     <a class="text-black hover:text-red-500" href="#">
      Women
     </a>
     <a class="text-black hover:text-red-500" href="#">
      <i class="fas fa-shopping-cart">
      </i>
     </a>
     <div class="relative">
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600" onclick="toggleDropdown()">
       Account
      </button>
      <div class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-2 z-20 hidden" id="dropdown">
       <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200" href="logout.php">
        Logout
       </a>
      </div>
     </div>
    </nav>
   </div>
  </header>
  <main class="container mx-auto px-4 py-8">
   <section class="bg-gray-800 text-white p-8 rounded-lg shadow-lg text-center relative">
    <h2 class="text-4xl font-bold mb-4">
     #1 SHOP FOR WOMEN FASHION DRESSES
    </h2>
    <p class="mb-6">
     Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
    </p>
    <button class="bg-white text-gray-800 px-6 py-3 rounded-full font-bold hover:bg-gray-200">
     OUR LATEST DESIGNS
    </button>
    <img alt="Fashionable woman in stylish dress" class="absolute inset-0 w-full h-full object-cover opacity-20" height="400" src="https://storage.googleapis.com/a1aa/image/y3qabsMMhY4edqN4fasdC85lTMSF91xfAUzwwrgfY3RkeQRdC.jpg" width="600"/>
   </section>
   <section class="mt-12">
    <h3 class="text-2xl font-bold mb-4">
     LATEST PRODUCTS
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=blouse">
       <img alt="Blouse on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/OyaiSMax7N6ZIxb0p2vvD8vMWPBdNQIoRcNg9Ja0Fo26hi6E.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       BLOUSE
      </h4>
      <p class="text-red-500 font-bold">
       Rp 125.000
      </p>
      <p class="text-gray-600 mb-4">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=gown">
       <img alt="Gown on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/beX8DDYTElyYHqlKjcoSPRXaeSHKsXW7nXaY5Z2vLKToHKqTA.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       GOWN
      </h4>
      <p class="text-red-500 font-bold">
       Rp 450.000
      </p>
      <p class="text-gray-600 mb-4">
       GAUN PUTIH SKIBIDI SUCI MIMIPERI
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=trousers">
       <img alt="Trousers on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/unzJmv0mI9bTIZNqa41Etqxum1VPfiafx6GzxYQ674ysHKqTA.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       TROUSERS
      </h4>
      <p class="text-red-500 font-bold">
       Rp 50.000
      </p>
      <p class="text-gray-600 mb-4">
       Celana Pendek Keren Sigma Abiezzzzzz (HITAM)
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
    </div>
   </section>
   <section class="mt-12">
    <h3 class="text-2xl font-bold mb-4">
     GOWNS
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=gown1">
       <img alt="Gown on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/beX8DDYTElyYHqlKjcoSPRXaeSHKsXW7nXaY5Z2vLKToHKqTA.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       GOWN
      </h4>
      <p class="text-red-500 font-bold">
       $30.00
      </p>
      <p class="text-gray-600 mb-4">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=gown2">
       <img alt="Gown on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/beX8DDYTElyYHqlKjcoSPRXaeSHKsXW7nXaY5Z2vLKToHKqTA.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       GOWN
      </h4>
      <p class="text-red-500 font-bold">
       $30.00
      </p>
      <p class="text-gray-600 mb-4">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="product_detail.php?product=gown3">
       <img alt="Gown on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://storage.googleapis.com/a1aa/image/beX8DDYTElyYHqlKjcoSPRXaeSHKsXW7nXaY5Z2vLKToHKqTA.jpg" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       GOWN
      </h4>
      <p class="text-red-500 font-bold">
       $30.00
      </p>
      <p class="text-gray-600 mb-4">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
    </div>
   </section>
  </main>
  <script>
   function toggleDropdown() {
        var dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
  </script>
 </body>
</html>