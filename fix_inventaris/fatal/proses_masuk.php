<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$masuk = mysqli_query($koneksi,"SELECT * FROM petugas WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($masuk);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($masuk);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['admin'] = $username;
		
		// alihkan ke halaman dashboard admin
		header("location:../admin/");

	// cek jika user login sebagai operator
}else if($data['level']=="operator"){
		// buat session login dan username
		$_SESSION['operator'] = $username;
		// alihkan ke halaman dashboard pegawai
		header("location:../operator/");
	}

}else{
	header("location:masuk.php?pesan=gagal");
}

?>
