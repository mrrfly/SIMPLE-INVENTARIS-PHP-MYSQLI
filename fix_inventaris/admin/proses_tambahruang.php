<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$id_ruang = isset($_POST['id_ruang'])? $_POST['id_ruang']:'';
$nama_ruang = isset($_POST['nama_ruang'])? $_POST['nama_ruang']:'';
$kode_ruang = isset($_POST['kode_ruang'])? $_POST['kode_ruang']:'';

$query = "INSERT INTO ruang VALUES ('$id_ruang', '$nama_ruang', '$kode_ruang')";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Data Berhasil Diinput')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_ruang.php'>";
}
}
?>
