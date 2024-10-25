<?php
include("koneksi.php");
session_start();

// Ambil nama pengguna dari sesi
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'username';
?>
<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
  <script>
   function selectColor(color) {
            document.querySelectorAll('.color-option').forEach(el => {
                el.classList.remove('ring-2', 'ring-black');
            });
            document.getElementById(color).classList.add('ring-2', 'ring-black');
        }
  </script>
 </head>
 <body class="bg-gray-100">
  <div class="max-w-6xl mx-auto p-6 flex">
   <!-- Image Section -->
   <div class="w-1/2">
    <div class="relative">
     <img alt="foto ke 1" class="w-full" height="100" src="https://asset-3s.3second.co.id/p/product/H03082314HT_1.JPG" width="100"/>
    </div>
    <div class="mt-4 flex space-x-2">
     <img alt="foto ke 2" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/H03082314HT_2.JPG" width="75"/>
     <img alt="foto ke 3" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/H03082314HT_3.JPG" width="75"/>
     <img alt="foto ke 4" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/H03082314HT_4.JPG" width="75"/>
     <img alt="foto ke 4" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/H03082314HT_5.JPG" width="75"/>
     <img alt="size chart" class="w-1/6" height="100" src="https://cdn.shopify.com/s/files/1/0363/2493/3763/files/SIZE_CHART-01_1_480x480.jpg?v=1676102635" width="75"/>
    </div>
   </div>
   <!-- Product Details Section -->
   <div class="w-1/2 pl-10">
    <p class="text-sm text-gray-500">
     Shop / Clothing
    </p>
    <h1 class="text-2xl font-bold mt-2">
    Hanna Risa Lace Long Tunic H010424
    </h1>
    <p class="text-xl text-gray-700 mt-2">
     $248
    </p>
    <p class="text-gray-700 mt-4">
    Hanna Lace Long Tunik
    Detail
    Produk Original Hanna
    Bahan: Katun Poplin
    Warna:  Black (Hitam)
    </br>
    Ukuran </br>
    S : Lebar Dada 49 cm, Panjang Badan 102 cm, Panjang Tangan 58 cm</br>
    M : Lebar Dada 52 cm, Panjang Badan 102 cm, Panjang Tangan 58 cm</br>
    L : Lebar Dada 55 cm, Panjang Badan 102 cm, Panjang Tangan 58 cm</br>
    XL : Lebar Dada 58 cm, Panjang Badan 102 cm, Panjang Tangan 58 cm

    Catatan
    Toleransi Ukuran (-+) 1-3 cm
    </p>
    <div class="mt-6">
     <p class="text-gray-700 font-medium">
      Product Color: Beige
     </p>
     <div class="flex space-x-2 mt-2">
      <span class="w-8 h-8 bg-white border border-gray-300 rounded-full inline-block color-option" id="white" onclick="selectColor('white')">
      </span>
      <span class="w-8 h-8 bg-black border border-gray-300 rounded-full inline-block color-option" id="black" onclick="selectColor('black')">
      </span>
      <span class="w-8 h-8 bg-blue-200 border border-gray-300 rounded-full inline-block color-option" id="blue" onclick="selectColor('blue')">
      </span>
     </div>
    </div>
    <div class="mt-6">
     <p class="text-gray-700 font-medium">
      Product Size
     </p>
     <div class="flex space-x-2 mt-2">
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       XS
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       S
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       M
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       L
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       XL
      </button>
     </div>
     <a class="text-sm text-gray-500 underline mt-2 inline-block" href="sizechart.php">
      Size Chart
     </a>
    </div>
    <button class="w-full bg-black text-white py-3 mt-6">
     Add to Bag
    </button>
   </div>
  </div>
 </body>
</html>