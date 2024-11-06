<?php
    include 'koneksi.php';

    $Harga = $_POST['harga'];
    $Nama = $_POST['nama'];
    $Kategori = $_POST['kategori'];
    $Deskripsi = $_POST['deskripsi'];

    $foto = $_FILES['foto']['name']
    $lokasi_tmp = $_FILES['foto']['tmp_name']
    


    $sql = "INSERT INTO produk (`id`, `Nama`,`Harga`,`Kategori`,`Deskripsi`,`foto`) VALUES (null,'$harga','$nama','$kategori','$deskripsi','$foto')";
    $query = mysqli_query($koneksi, $sql);
    if($query){
        echo mysqli_connect_error();
        echo mysqli_error($koneksi);
    }header ("location:tambahproduk.php")

    move_uploaded_file($lokasi_tmp,"../fotoproduk/$foto");

?>