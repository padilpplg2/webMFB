<?php

$koneksi = mysqli_connect("localhost","root","","dbweb_mfb");
if(!$koneksi){
    die(mysqli_connect_error($koneksi));
}

?>