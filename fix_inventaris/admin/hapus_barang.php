<?php
include "../fatal/koneksi.php";

$no_inventaris = $_GET['no_inventaris'];
mysqli_query($koneksi,"DELETE FROM inventaris WHERE no_inventaris='$no_inventaris'");
header("location:data_barang.php");
?>
