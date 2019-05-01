<?php
include "../fatal/koneksi.php";

$id_petugas = $_GET['id_petugas'];
mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas='$id_petugas'");
header("location:data_admin.php");
?>
