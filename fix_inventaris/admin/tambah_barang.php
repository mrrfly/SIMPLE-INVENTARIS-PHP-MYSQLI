<?php
include_once 'desain/kepala.php';
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Barang</h4>
            <p class="card-description">
              <a href="data_barang.php" class="btn btn-lg btn-inverse-danger">Kembali</a>
            </p>

            <form class="forms-sample" method="post" action="proses_tambahbarang.php">

              <input type="hidden" name="no_inventaris">

              <div class="form-group">
                <label>Nama</label>
                <input name="nama_barang" type="text" class="form-control" placeholder="Nama Barang" required>
              </div>

              <div class="form-group">
                <label>Jenis</label>
                <select name="id_jenis" class="js-example-basic-single" style="width:100%">
                  <?php
										$query = "SELECT * FROM jenis_inventaris";
										$exe = mysqli_query($koneksi, $query);
										while ($jenis=mysqli_fetch_array($exe)){
											echo '<option value='.$jenis["id_jenis"].'>'.$jenis["nama_jenis"].'</option>';
										}
									?>
                </select>
              </div>

              <div class="form-group">
                <label>Kondisi</label>
                <input name="kondisi" type="text" class="form-control" placeholder="Bagus/Baik/Jelek/Rusak/DLL" required>
              </div>

              <div class="form-group">
                <label>Keterangan</label>
                <textarea name="ket_barang" class="form-control" placeholder="Warna Merah/A4 SIDU" required></textarea>
              </div>

              <div class="form-group">
                <label>Ruang</label>
                <select name="id_ruang" class="js-example-basic-single" style="width:100%;">
                  <?php
										$query2 = "SELECT * FROM ruang";
										$exe2 = mysqli_query($koneksi, $query2);
										while ($ruang=mysqli_fetch_array($exe2)){
											echo '<option value='.$ruang["id_ruang"].'>'.$ruang["nama_ruang"].'</option>';
										}
									?>
                </select>
              </div>

              <div class="form-group">
                <label>Stok</label>
                <input name="stock" type="number" class="form-control" placeholder="Isi dengan Nomor" required>
              </div>

              <div class="form-check form-check-flat form-check-primary">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  Setuju?
                </label>
              </div>

              <?php
								$username = $_SESSION['admin'];
								$query3 = "SELECT * FROM petugas WHERE username='$username'";
								$exe3 = mysqli_query($koneksi, $query3);
								$petugas = mysqli_fetch_array($exe3);
								echo '<input type="hidden" name="id_petugas" value='.$petugas['id_petugas'].'>';
							?>

              <button name="input" type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="data_barang.php" class="btn btn-inverse-danger">Kembali</a>
            </form>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
include_once 'desain/kaki.php';
?>
