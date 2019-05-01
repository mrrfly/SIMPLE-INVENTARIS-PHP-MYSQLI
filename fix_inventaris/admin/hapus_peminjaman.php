<?php
include "../fatal/koneksi.php";

$no_detail = $_GET['no_detail'];
mysqli_query($koneksi,"DELETE FROM pinjam_detail WHERE no_detail='$no_detail'");
header("location:data_peminjaman.php");
?>
