<?php
include "../fatal/koneksi.php";

$id_jenis = $_GET['id_jenis'];
mysqli_query($koneksi,"DELETE FROM jenis_inventaris WHERE id_jenis='$id_jenis'");
header("location:data_jenisbarang.php");
?>
