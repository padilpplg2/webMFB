<?php
include 'koneksi.php';
session_start ();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus pengguna dari database
    $sql = "DELETE FROM user WHERE id='$id'";
    if ($koneksi->query($sql) === TRUE) {
        header('Location: admin.php');
    } else {
        echo "Error: " . $koneksi->error;
    }
}

$koneksi->close();
?>
