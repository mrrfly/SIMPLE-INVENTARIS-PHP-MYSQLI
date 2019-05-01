<?php
include "../fatal/koneksi.php";
if(isset($_POST['edit']))
{
$id_jenis2 = isset($_POST['id_jenis'])? $_POST['id_jenis']:'';
$nama_barang = isset($_POST['nama_barang'])? $_POST['nama_barang']:'';
$kondisi = isset($_POST['kondisi'])? $_POST['kondisi']:'';
$ket_barang = isset($_POST['ket_barang'])? $_POST['ket_barang']:'';
$id_ruang2 = isset($_POST['id_ruang'])? $_POST['id_ruang']:'';
$stock = isset($_POST['stock'])? $_POST['stock']:'';

$query = "UPDATE inventaris SET nama_barang='$nama_barang', kondisi='$kondisi',
          ket_barang='$ket_barang', id_ruang='$id_ruang2', stock='$stock'
          WHERE id_jenis='$id_jenis2'";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Success!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_barang.php'>";
}
}
?>
