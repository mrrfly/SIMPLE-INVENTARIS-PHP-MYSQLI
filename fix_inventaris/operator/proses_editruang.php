<?php
include '../fatal/koneksi.php';
if(isset($_POST['edit']))
{
$id_ruang = isset($_POST['id_ruang'])? $_POST['id_ruang']:'';
$nama_ruang = isset($_POST['nama_ruang'])? $_POST['nama_ruang']:'';
$kode_ruang = isset($_POST['kode_ruang'])? $_POST['kode_ruang']:'';

$query = "UPDATE ruang SET nama_ruang='$nama_ruang', 
		kode_ruang='$kode_ruang' WHERE id_ruang='$id_ruang'";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('MANTAP GAN!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_ruang.php'>";
}else{
	echo "<script>alert('GAGAL!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_ruang.php'>";
}
}
?>