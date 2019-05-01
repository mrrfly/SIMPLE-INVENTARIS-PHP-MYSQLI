<?php
include "../fatal/koneksi.php";
if(isset($_POST['edit']))
{
$id_petugas		= isset($_POST['id_petugas'])? $_POST['id_petugas']:'';
$nama_petugas	= isset($_POST['nama_petugas'])? $_POST['nama_petugas']:'';
$username		= isset($_POST['username'])? $_POST['username']:'';
$password		= isset($_POST['password'])? $_POST['password']:'';

$query = "UPDATE petugas SET nama_petugas='$nama_petugas', username='$username', password='$password' WHERE id_petugas='$id_petugas'";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Gud Gan!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_operator.php'>";
}else{
	echo "<script>alert('GAGAL!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_operator.php'>";
}
}
?>