<?php
include "../fatal/koneksi.php";
session_start();
if (!isset($_SESSION['admin'])){
header ("location:../fatal/masuk.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Halaman Admin | inventaris-MRR</title>
    <link rel="stylesheet" type="text/css" href="../vendors/iconfonts/mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" type="text/css" href="../vendors/css/vendor.bundle.addons.css">
    <link rel="stylesheet" type="text/css" href="../css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="../images/favicon.png" />

    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/highcharts.js"></script>
    <script type="text/javascript">
      var chart1;
      $(document).ready(function() {
        chart1 = new Highcharts.Chart({
          chart:{
            renderTo:'grapik',
            type:'column'
          },
          title:{
            text:'Grafik Peminjaman'
          },
          xAxis:{
            categories:['Nama Barang']
          },
          yAxis:{
            title:{
              text:'Jumlah Stok'
            }
          },
          series:
          [
            <?php
            $sql8 = "SELECT * FROM inventaris";
            $query8 = mysqli_query($koneksi,$sql8) or die (mysqli_error());
            while ($ret = mysqli_fetch_array($query8)) {
              $merk = $ret['nama_barang'];
              $sql_jumlah = "SELECT stock FROM inventaris WHERE nama_barang='$merk'";
              $query_jumlah = mysqli_query($koneksi,$sql_jumlah) or die (mysqli_error());
              while ($data = mysqli_fetch_array($query_jumlah)) {
                $jumlah = $data['stock'];
              }
              ?>
              {
                name:'<?php echo $merk; ?>',
                data:[<?php echo $jumlah; ?>]
              },
              <?php } ?>
          ]
        });
      });
    </script>

  </head>
  <body class="sidebar-toggle-display sidebar-hidden">
    <div class="container-scroller">

      <!-- Navbar -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">Inventaris</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">IV</a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <h1><a href="index.php" class="mt-2 btn btn-primary">Aplikasi Inventaris</a></h1>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                <img src="../images/kitah.jpg" alt="profile"/>
                <span class="nav-profile-name">MENU</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <div class="dropdown-divider"></div>

							<div class="card">
								<div class="card-body">
                    <img src="../images/kitah.jpg"  style="width:100%;height:50%;">

                  <div class="d-flex flex-row flex-wrap">
										<div class="ml-3">
    									<br><h6>Hubungi: </h6>
											<p class="text-muted">MRRFLY.DEV@GMAIL.COM</p>
											<p class="mt-2 text-success font-weight-bold">Developer</p>
											<p class="mt-2 font-weight-bold">
                        <a class="btn btn-danger" href="HTTPS://JADIDEWA.COM" target="_blank">JADIDEWA.COM</a>
                      </p>
										</div>
									</div>
								</div>
							</div>

                <button type="button" class="dropdown-item" data-toggle="modal" data-target="#modalkeluar">
                  <i class="mdi mdi-logout text-primary"></i>
                  Keluar
                </button>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- END Navbar -->

      <!-- Main Wrapper -->
      <div class="container-fluid page-body-wrapper">
        <!-- SIDEBAR -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#peminjam" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Peminjam</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="peminjam">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="data_peminjam.php">Data Peminjam</a></li>
                  <li class="nav-item"> <a class="nav-link" href="tambah_peminjam.php">Tambah Peminjam</a></li>   
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#barang" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Barang</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="barang">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="data_barang.php">Pinjam Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="tambah_barang.php">Tambah Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="data_jenisbarang.php">Data Jenis Barang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="tambah_jenis.php">Tambah Jenis Barang</a></li>
                  
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Peminjaman</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">                 
                  <li class="nav-item"> <a class="nav-link" href="data_peminjaman.php">Data Peminjaman</a></li>
                  <li class="nav-item"> <a class="nav-link" href="data_pengembalian.php">Data Pengembalian</a></li>
                </ul>
              </div>
            </li>           

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ruang" aria-expanded="false" aria-controls="ui-advanced">
                <i class="mdi mdi-layers menu-icon"></i>
                <span class="menu-title">Ruang</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ruang">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="data_ruang.php">Data Ruang</a></li>
                  <li class="nav-item"> <a class="nav-link" href="tambah_ruang.php">Tambah Ruang</a></li>   
                </ul>
              </div>
            </li>

          <div class="dropdown-divider"></div>

          <b class="text-center">Menu Admin</b>

          <div class="dropdown-divider"></div>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="mdi mdi-account menu-icon"></i>
                <span class="menu-title">Pengguna</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="../admin/data_admin.php"> Admin </a></li>
                  <li class="nav-item"> <a class="nav-link" href="../admin/data_operator.php"> Operator </a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="laporan.php">
                <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                <span class="menu-title">Laporan</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- END SIDEBAR -->
