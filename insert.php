<?php
    include 'koneksi.php';

    $Harga = $_POST['harga'];
    $Nama = $_POST['nama'];
    $Kategori = $_POST['kategori'];
    $Deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name']; 
    $lokasi_tmp = $_FILES['foto']['tmp_name'];

    // Make sure you don't miss sanitizing/escaping user inputs here to prevent SQL injection

    $sql = "INSERT INTO produk (`id`, `Nama`, `Harga`, `Kategori`, `Deskripsi`, `foto`) 
            VALUES (null, '$Nama', '$Harga', '$Kategori', '$Deskripsi', '$foto')";

    $query = mysqli_query($koneksi, $sql);

    header("Location: adminproduk.php");

    move_uploaded_file($lokasi_tmp,"fotoproduk/$foto")
?>
