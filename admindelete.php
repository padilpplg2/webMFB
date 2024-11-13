<?php
include 'koneksi.php';
$id = $_GET['id'];

$queryData = mysqli_query($koneksi, "SELECT foto FROM produk where id='$id'");
$data = mysqli_fetch_array($queryData);
$fotoLama = $data['foto'];


$sql = "DELETE FROM produk WHERE id ='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    unlink("fotoproduk/$fotoLama");
}


header("Location: adminproduk.php");
?>
