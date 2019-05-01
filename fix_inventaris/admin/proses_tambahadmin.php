<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$id_petugas = isset($_POST['id_petugas'])? $_POST['id_petugas']:'';
$nama_petugas = isset($_POST['nama_petugas'])? $_POST['nama_petugas']:'';
$username = isset($_POST['username'])? $_POST['username']:'';
$password = isset($_POST['password'])? $_POST['password']:'';
$level = isset($_POST['level'])? $_POST['level']:'';

$query = "INSERT INTO petugas VALUES ('$id_petugas', '$nama_petugas', '$username', '$password', 'admin')";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Data Berhasil Diinput')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_admin.php'>";
}
}
?>
