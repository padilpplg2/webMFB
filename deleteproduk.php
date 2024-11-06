
<?php
include "koneksi.php";
$nama = $_GET['nama'];
$sql = "DELETE FROM produk WHERE nama ='$nama'";
$query = mysqli_query($koneksi, $sql);

header("Location: adminproduk.php");
