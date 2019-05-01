<?php
include "../fatal/koneksi.php";
if(isset($_POST['input']))
{
$no_inventaris2 = isset($_POST['no_inventaris'])? $_POST['no_inventaris']:'';
$nip = isset($_POST['nip'])? $_POST['nip']:'';
$jml = isset($_POST['jml'])? $_POST['jml']:'';

$query3 = "SELECT * FROM inventaris WHERE no_inventaris='$no_inventaris2'";
$sql3 = mysqli_query($koneksi, $query3);
$data3 = mysqli_fetch_array($sql3);

$stock = $data3['stock'];
$total = $stock-$jml;
$jenis = $data3['id_jenis'];

	if($jml<=$stock){
		$query4 = "INSERT INTO pinjam VALUES('', '$nip', NOW())";
		$sql4 = mysqli_query($koneksi, $query4);
		$id = mysqli_insert_id($koneksi);
			if($sql4) {
				if($jenis=='a_1'){
				$query5 = "INSERT INTO pinjam_detail(no_detail, no_pinjam, no_inventaris, jml, tgl_pinjam, status) VALUES('', '$id', '$no_inventaris2', '$jml', NOW(), 'dipinjam')";
				$sql5 = mysqli_query($koneksi, $query5);
				} else {
					$query6 = "INSERT INTO pinjam_detail VALUES('', '$id', '$no_inventaris2', '$jml', NOW(), NOW(), 'dipinjam')";
					$sql6 = mysqli_query($koneksi, $query6);
				}
			}
					if($sql5 OR $sql6) {
						$query7 = "UPDATE inventaris SET stock='$total' WHERE no_inventaris='$no_inventaris2'";
						$sql7 = mysqli_query($koneksi, $query7);
							if($sql7) {
								echo "<script>alert('Berhasil')</script>";
								echo "<meta http-equiv='refresh' content='0 url=data_peminjaman.php'>";
							}
					}
			} else{
		echo "<script>alert('Gagal, Stock Hanya Ada $stock')</script>";
		echo "<meta http-equiv='refresh' content='0 url=data_barang.php'>";
	}
}
?>
