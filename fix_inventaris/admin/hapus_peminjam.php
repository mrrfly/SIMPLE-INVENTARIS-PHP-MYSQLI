<?php
include "../fatal/koneksi.php";

$nip = $_GET['nip'];
mysqli_query($koneksi,"DELETE FROM peminjam WHERE nip='$nip'");
header("location:data_peminjam.php");
?>
