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
     <img alt="foto ke 1" class="w-full" height="100" src="https://asset-3s.3second.co.id/p/product/I13062318HT_1.JPG" width="100"/>
    </div>
    <div class="mt-4 flex space-x-2">
     <img alt="foto ke 2" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/I13062318HT_1.JPG" width="75"/>
     <img alt="foto ke 3" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/I13062318HT_2.JPG" width="75"/>
     <img alt="foto ke 4" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/I13062318HT_3.JPG" width="75"/>
     <img alt="foto ke 5" class="w-1/6" height="100" src="https://asset-3s.3second.co.id/p/product/I13062318HT_4.JPG" width="75"/>
     <img alt="size chart" class="w-1/6" height="100" src="https://cdn.shopify.com/s/files/1/0363/2493/3763/files/SIZE_CHART-01_1_480x480.jpg?v=1676102635" width="75"/>
    </div>
   </div>
   <!-- Product Details Section -->
   <div class="w-1/2 pl-10">
    <p class="text-sm text-gray-500">
     Shop / Clothing
    </p>
    <h1 class="text-2xl font-bold mt-2">
    Famo Classic Leather Shoes Black Brown H130623
    </h1>
    <p class="text-xl text-gray-700 mt-2">
    Rp 130.000
    </p>
    <p class="text-gray-700 mt-4">
    Detail - 130623
100% Produk Original FAMO
Bahan Upper: 100% Leather PU 
Bahan Sol: 100% Rubber
Warna: Black (Upper), Brown (Sol)

Model sepatu ini classic dan mudah dipadu-padankan dengan berbagai outfit yang Anda miliki. Dapatkan sekarang, sebelum kehabisan! 

Ukuran (Insole) 
Size 40: 25 cm
Size 41: 25.5 cm
Size 42: 26 cm
Size 43: 26.5 cm
Size 44: 27 cm 

Catatan 
Instruksi perawatan tertera pada kemasan dan tag.
Ukuran dapat berbeda dengan aslinya (-+) 0.5 cm
Warna mungkin dapat berbeda akibat cahaya saat pengambilan foto maupun kondisi gadget saat melihat foto ini
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
        40
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       41
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       42
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       43
      </button>
      <button class="w-10 h-10 border border-gray-300 rounded-full">
       44
      </button>
     </div>
     <a class="text-sm text-gray-500 underline mt-2 inline-block" href="sizechartsepatu.php">
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