<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$id_jenis = isset($_POST['id_jenis'])? $_POST['id_jenis']:'';
$nama_jenis = isset($_POST['nama_jenis'])? $_POST['nama_jenis']:'';
$ket_jenis = isset($_POST['ket_jenis'])? $_POST['ket_jenis']:'';

$query = "INSERT INTO jenis_inventaris VALUES ('$id_jenis', '$nama_jenis', '$ket_jenis')";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Data Berhasil Diinput')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_barang.php'>";
}
}
?>
