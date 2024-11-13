<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    form {
        width:15rem;
        height:33rem;
        border-radius:20px;
        margin-left:2rem;
        margin-top:2rem;
    }

    h1 {
        font-size:30px;
        margin:1rem;
    }

    button {
        margin-left:5rem;
    }

    
    
</style>
<body>
    
    <form action="updateproduk.php" method="post" enctype="multipart/form-data" class="shadow">
    <?php
    include 'koneksi.php';
    $id     = $_GET['id'];
    $query  = mysqli_query($koneksi,"SELECT * FROM produk WHERE id = '$id'");
    $produk = mysqli_fetch_array($query);
    ?>

    <div class="none"><h1>Update Produk</h1></div>
    <input type="hidden" name="id" value="<?=$produk['id']?>"id="">
    <div class="mb-3 m-3 ">
        <label  class="form-label">harga</label>
        <input  class="form-control" type="text" name="harga" id="" value="<?=$produk['harga']?>">
    </div>
    <div class="mb-3 m-3">
        <label  class="form-label">nama</label>
        <input  class="form-control" type="text" name="nama" id="" value="<?=$produk['nama']?>">
    </div>
    <div class="mb-3 m-3">
        <label  class="form-label">kategori</label>
        <input  class="form-control" type="text" name="kategori" id="" value="<?=$produk['kategori']?>">
    </div>
    <div class="mb-3 m-3">
        <label  class="form-label">deskripsi</label>
        <input  class="form-control" type="text" name="deskripsi" id="" value="<?=$produk['deskripsi']?>">
    </div>
    <div class="mb-3 m-3">
        <label  class="form-label">foto</label>
        <input  class="form-control" type="file" name="foto" id="" value="<?=$produk['foto']?>">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>
</body>
</html>