<?php
include "../fatal/koneksi.php";
if(isSET($_POST['input']))
{
$no_pinjam = isset($_POST['no_pinjam'])? $_POST['no_pinjam']:'';
$no_inventaris = isset($_POST['no_inventaris'])? $_POST['no_inventaris']:'';
$jml = isset($_POST['jml'])? $_POST['jml']:'';

$query4 = "SELECT * FROM inventaris WHERE no_inventaris='$no_inventaris'";
$sql4 = mysqli_query($koneksi, $query4);
$data4 = mysqli_fetch_array($sql4);

$stock = $data4['stock'];
$total = $stock+$jml;

$query5 = "UPDATE inventaris SET stock='$total' WHERE no_inventaris='$no_inventaris'";
$sql5 = mysqli_query($koneksi, $query5);

	if($sql5){
		$query6 = "UPDATE pinjam_detail SET tgl_kembali=NOW(), status='dikembalikan' WHERE no_pinjam='$no_pinjam'";
		$sql6 = mysqli_query($koneksi, $query6);
		if($sql6) {
				echo "<script>alert('Berhasil')</script>";
				echo "<meta http-equiv='refresh' content='0 url=data_peminjaman.php'>";
				}
	}
}
?>
