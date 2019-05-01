<?php
include 'fatal/koneksi.php';
session_start();
if (!isset($_SESSION['username'])){
header ("location:fatal/masuk.php");
}
?>
<html>
<head>
	<title>
	</title>
</head>
<body>
<?php
$username = $_SESSION['username'];
$query = "SELECT * FROM petugas WHERE username='$username'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$level = $data['level'];

if ($level=="admin") {
	header ("location:admin/");
}else{
	header ("location:operator/");
}
?>
</body>
</html>
