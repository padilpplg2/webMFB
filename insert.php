<?php
    include 'koneksi.php';

    $Harga = $_POST['harga'];
    $Nama = $_POST['nama'];
    $Kategori = $_POST['kategori'];
    $Deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name'];  // Missing semicolon fixed here
    $lokasi_tmp = $_FILES['foto']['tmp_name'];

    // Make sure you don't miss sanitizing/escaping user inputs here to prevent SQL injection

    $sql = "INSERT INTO produk (`id`, `Nama`, `Harga`, `Kategori`, `Deskripsi`, `foto`) 
            VALUES (null, '$Nama', '$Harga', '$Kategori', '$Deskripsi', '$foto')";

    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        // If query is successful, move the uploaded file to the destination folder
        move_uploaded_file($lokasi_tmp, "../fotoproduk/$foto");

        // Redirect to another page
        header("Location: tambahproduk.php");
        exit; // Always call exit after header redirection to stop further execution
    } else {
        // If there was an error with the query, you can display the error message
        echo "Error: " . mysqli_error($koneksi);
    }
?>
