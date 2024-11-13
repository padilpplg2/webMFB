<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    a{
        text-decoration:none;
        color:white;
    }
    .add{
        margin-left:60rem;
        position: absolute;
    }
    h1{
        margin-left:35rem;
    }
</style>
<body>
    <h1>Data produk</h1>
    <button class="add btn btn-success"><a href="tambahproduk.php">Tambah produk</a></button>
    <div class="shadow  m-3" style="width:50rem;">
            
            <table class="table " style="border-radius:20px">
                <tr class="table-active">
                    <th>Id</th>
                    <th>Harga</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                </tr>
                

            <?php
                include 'koneksi.php';
                $query = mysqli_query($koneksi, 'select * from produk');
                while ($produk = mysqli_fetch_array($query)){
            ?>

                <tr>
                    <td><?= $produk['id']?></td>
                    <td><?= $produk['harga']?></td>
                    <td><?= $produk['nama']?></td>
                    <td><?= $produk['kategori']?></td>
                    <td><?= $produk['deskripsi']?></td>
                    <td>
                        <a href="editproduk.php?id=<?= $produk['id']?>">
                        <button type="submit" class="btn btn-success">Edit</button></a>
                        <a href="admindelete.php?id=<?= $produk['id']?>">
                        <button type="submit" class="btn btn-danger">Hapus</button></a>
                    </td>   
                </tr>

                <?php } ?>

            </table>       
    </div>
</body>
</html>