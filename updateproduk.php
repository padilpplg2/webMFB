<?php
include 'koneksi.php';

$id   = $_POST['id'];
$harga = $_POST['harga'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

$sql = "UPDATE produk SET nama='$nama',harga='$harga',nama='$nama',kategori='$kategori',deskripsi='$deskripsi' WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);

header("Location: adminproduk.php");