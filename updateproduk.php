<?php
include 'koneksi.php';

$id   = $_POST['id'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name']; 
$lokasi_tmp = $_FILES['foto']['tmp_name'];


$queryData = mysqli_query($koneksi, "SELECT foto FROM produk where id='$id'");
$data = mysqli_fetch_array($queryData);
$fotoLama = $data['foto'];

$sql = "UPDATE produk SET nama='$nama',harga='$harga',nama='$nama',kategori='$kategori',deskripsi='$deskripsi',foto='$foto' WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);
if($query){
    unlink("fotoproduk/$fotoLama");
    move_uploaded_file($lokasi_tmp,"fotoproduk/$foto");
}
header("Location: adminproduk.php");