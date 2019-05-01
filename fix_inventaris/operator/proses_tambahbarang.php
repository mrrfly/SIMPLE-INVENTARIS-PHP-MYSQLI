<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$no_inventaris = isset($_POST['no_inventaris'])? $_POST['no_inventaris']:'';
$id_jenis = isset($_POST['id_jenis'])? $_POST['id_jenis']:'';
$nama_barang = isset($_POST['nama_barang'])? $_POST['nama_barang']:'';
$kondisi = isset($_POST['kondisi'])? $_POST['kondisi']:'';
$ket_barang = isset($_POST['ket_barang'])? $_POST['ket_barang']:'';
$id_ruang = isset($_POST['id_ruang'])? $_POST['id_ruang']:'';
$id_petugas = isset($_POST['id_petugas'])? $_POST['id_petugas']:'';
$stock = isset($_POST['stock'])? $_POST['stock']:'';

$proses = "INSERT INTO inventaris VALUES ('$no_inventaris', '$id_jenis', '$nama_barang', '$kondisi', '$ket_barang', '$id_ruang', NOW(), '$id_petugas', '$stock')";
$exe_proses = mysqli_query($koneksi, $proses);
if ($exe_proses) {
	echo "<script>alert('Data Berhasil Diinput')</script>";
	echo "<meta http-equiv='refresh' content='0 url=data_barang.php'>";
} else{
	echo "<script>alert('No Inventaris Sama!')</script>";
	echo "<meta http-equiv='refresh' content='0 url=input_data_barang.php'>";
}

}
?>
