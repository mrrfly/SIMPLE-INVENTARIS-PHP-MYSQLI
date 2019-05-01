<?php
include '../fatal/koneksi.php';
if(isset($_POST['edit']))
{
$nip = isset($_POST['nip'])? $_POST['nip']:'';
$nama_peminjam = isset($_POST['nama_peminjam'])? $_POST['nama_peminjam']:'';
$kelas = isset($_POST['kelas'])? $_POST['kelas']:'';
$no_telp = isset($_POST['no_telp'])? $_POST['no_telp']:'';

$query = "UPDATE peminjam SET nama_peminjam='$nama_peminjam', 
		kelas='$kelas', no_telp='$no_telp' WHERE nip='$nip'";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
	echo "<script>alert('MANTAP GAN!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_peminjam.php'>";
}else{
	echo "<script>alert('GAGAL!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_peminjam.php'>";
}
}
?>