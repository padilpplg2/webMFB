<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <form action="insert.php" method="POST"enctype="multipart/form-data" class="m-2  ">
 <p>Harga : <input type="number" name="harga"></p>
 <p>Nama : <input type="text" name="nama"></p>
 <p>Deskripsi : <input type="text" name="deskripsi"></p>
 <p>Kategori : <input type="text" name="kategori"></p>
 <p>foto : <input type="file" name="foto"></p>
 <button type="submit" class="btn btn-success">Simpan</button>
</form>

<form action="keranjang.php" method="post">
    <input type="hidden" name="product_id" value="<?=$id?>">
    <button type="submit">Keranjang</button>
</form>
</body>
</html>