<?php
include "../fatal/koneksi.php";

$id_ruang = $_GET['id_ruang'];
mysqli_query($koneksi,"DELETE FROM ruang WHERE id_ruang='$id_ruang'");
header("location:data_ruang.php");
?>
