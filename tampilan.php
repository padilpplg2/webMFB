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
     TEMPAT FASHION PRIA DAN WANITA
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
      <a href="detalprodukrrq.php">
       <img alt="Varsity RRQ" class="w-52 h-48 object-cover mb-4 mx-auto" height="300" src="https://asset-3s.3second.co.id/p/product/104122315HT_1.JPG" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       VARSITY
      </h4>
      <p class="text-red-500 font-bold">
       Rp 345.000
      </p>
      <p class="text-gray-600 mb-4">
       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="detalprodukjacket.php">
       <img alt="Gown on a hanger" class="w-52 h-48 object-cover mb-4 mx-auto" height="300" src="https://asset-3s.3second.co.id/p/product/S08062415MR_1.JPG" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       JACKET
      </h4>
      <p class="text-red-500 font-bold">
       Rp 250.000
      </p>
      <p class="text-gray-600 mb-4">
      Coach Jacket The Finest Waves
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="detalproduksepatu.php">
       <img alt="Trousers on a hanger" class="w-52 h-48 object-cover mb-4 mx-auto" height="300" src="https://asset-3s.3second.co.id/p/product/I13062318HT_1.JPG" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       SEPATU
      </h4>
      <p class="text-red-500 font-bold">
       Rp 130.000
      </p>
      <p class="text-gray-600 mb-4">
       Sepatu Kulit Classic 
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
    </div>
   </section>
   <section class="mt-12">
    <h3 class="text-2xl font-bold mb-4">
     GAUN WANITA
    </h3>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="detalprodukgaun.php">
       <img alt="Gown on a hanger" class="w-52 h-48 object-cover mb-4 mx-auto" height="300" src="https://asset-3s.3second.co.id/p/product/H01042411HT_1.JPG" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
      GAUN HANNA
      </h4>
      <p class="text-red-500 font-bold">
       Rp 218.500
      </p>
      <p class="text-gray-600 mb-4">
      Hanna Risa Lace Long Tunic H010424      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="detalprodukgaun3.php">
       <img alt="Gown on a hanger" class="w-48 h-48 object-cover mb-4 mx-auto" height="300" src="https://asset-3s.3second.co.id/p/product/703042314HT_1.JPG" width="300"/>

      </a>
      <h4 class="text-xl font-bold">
       GAUN HANNA
      </h4>
      <p class="text-red-500 font-bold">
       Rp 234.567
      </p>
      <p class="text-gray-600 mb-4">
      Hanna Maxi Dress Rydea Swizz Dot White H030323
      </p>
      <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
       ADD TO CART
      </button>
     </div>
     <div class="bg-white p-4 rounded-lg shadow-lg text-center">
      <a href="detalprodukgaun2.php">
       <img alt="Gown on a hanger" class="w-full h-48 object-cover mb-4" height="300" src="https://asset-3s.3second.co.id/p/product/H01082315HT_1.JPG" width="300"/>
      </a>
      <h4 class="text-xl font-bold">
       GAUN HANNA
      </h4>
      <p class="text-red-500 font-bold">
       Rp 255.555
      </p>
      <p class="text-gray-600 mb-4">
      Hanna Knit Cardigan With Belt H010823
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