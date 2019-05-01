<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$nip = isset($_POST['nip'])? $_POST['nip']:'';
$nama_peminjam = isset($_POST['nama_peminjam'])? $_POST['nama_peminjam']:'';
$kelas = isset($_POST['kelas'])? $_POST['kelas']:'';
$no_telp = isset($_POST['no_telp'])? $_POST['no_telp']:'';

$query = "INSERT INTO peminjam VALUES ('$nip', '$nama_peminjam', '$kelas', '$no_telp')";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('Data Berhasil Diinput')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_peminjam.php'>";
}else {
  echo "<script>alert('GAGAL!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_peminjam.php'>";
}
}
?>
